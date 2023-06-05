<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\Tag;
use App\service\imageService;
use App\service\slugGenerator;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class NewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NewsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('news', 'news');
    }
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('title');
        CRUD::column('short_description');
        CRUD::column('slug');
        CRUD::column('image');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('Admin.News.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function get_presets(){
        $data = DB::table('presets')->where('section','=','table_of_content')->get();
        return response()->json($data[0]);
    }


    public function store(Request $request, imageService $imageService, slugGenerator $slugGenerator)
    {
        $hot_article = 0;
        $highlighted_article = 0;
        $image_name = $imageService->insertImage($request, 'news');
        $banner_image = $imageService->bannerImage($request, 'news-banner');
        $seo_keyword = addslashes($request->seo_keyword);
        $seo_meta = addslashes($request->seo_meta);
        if ($request->hot_article == 1) {
            $hot_article = 1;
        };
        if ($request->highlighted_article == 1) {
            $highlighted_article = 1;
        }

        $slug = $slugGenerator->generateSlug('news', $request->title);
        $hot_article;

        $insert = DB::table('news')->insert([
            "title" => $request->title,
            "short_description" => $request->short_description,
            "content" => $request->content,
            "slug" => $slug,
            "thumbnill_image" => $image_name,
            "banner_image" => $banner_image,
            "category_id" => implode(',', (array) $request->input('category_id', [])),
            "tag_id" => implode(',', (array) $request->input('tag_id', [])),
            "table_of_contents" => $request->tab_content,
            "hot_article" => $hot_article,
            "highlights" => $highlighted_article,
            "seo_keywords" => $seo_keyword,
            "seo_meta" => $seo_meta,
            "created_at" => Carbon::now()
        ]);

        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect('/admin/news');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $data = DB::table('news')->where('id', '=', $id)->first();
        return view('Admin.News.edit', ['data' => $data, 'categories' => $categories, 'tags' => $tags]);
    }

    public function update(Request $request, $id, slugGenerator $slugGenerator, imageService $imageService)
    {
        
        $seo_keyword = addslashes($request->seo_keyword);
        $seo_meta = addslashes($request->seo_meta);

        $slug = $slugGenerator->generateSlug('news', $request->title);
        $findImage = DB::table('news')->where('id', $id)->first();
        
        if ($request->hasFile('image')) {

            $oldImage = $findImage->thumbnill_image;
            $path = public_path($oldImage);

            if (is_file($path)) {
                unlink($oldImage);
            }
        }
        if ($request->hasFile('banner_image')) {
            $oldBannerImage = $findImage->banner_image;
            $banner_path = public_path($oldBannerImage);
            if (is_file($banner_path)) {
                unlink($oldBannerImage);
            }
        }
        $data = [
            "title" => $request->title,
            "short_description" => $request->short_description,
            "content" => $request->content,
            "slug" => $slug,
            "category_id" => implode(',', (array) $request->input('category_id', [])),
            "tag_id" => implode(',', (array) $request->input('tag_id', [])),
            "table_of_contents" => $request->tab_content,
            "seo_keywords" => $seo_keyword,
            "seo_meta" => $seo_meta,
            "updated_at" => Carbon::now()
        ];

        if ($request->hasFile('image')) {
            $data["thumbnill_image"] = $imageService->insertImage($request, 'news');
        }
        if ($request->hasFile('banner_image')) {
            $data["banner_image"] = $imageService->bannerImage($request, 'news-banner');
        }
       
        $data["hot_article"] = $request->hot_article ? "1" : "0";
        $data["highlights"] = $request->highlighted_article ? "1":"0";

        $update = DB::table('news')->where('id', '=', $id)->update($data);



        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect('/admin/news/');
    }




    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */


    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */





    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            // 'name' => 'required|min:2',
        ]);

        CRUD::field('title');
        CRUD::field('short_description');
        CRUD::field('content');
        CRUD::field('slug');
        CRUD::field('image')->type('upload');
        $this->crud->addField([   // select_from_array
            'name' => 'platform',
            'label' => "Platform",
            'type' => 'select_from_array',
            'options' => ["facebook" => "facebook", "twitter" => "twitter", "linkdin" => "linkdin", "instagram" => "instagram"],
            'allows_null' => false,
            'default' => 'one',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        CRUD::field('category_id');
        CRUD::field('tag_id');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
