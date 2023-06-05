<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\KnowledgesRequest;
use App\Models\KnowledgeCategory;
use App\Models\Knowledges;
use App\service\imageService;
use App\service\slugGenerator;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class KnowledgesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class KnowledgesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Knowledges::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/knowledges');
        CRUD::setEntityNameStrings('knowledges', 'knowledges');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title');
        CRUD::column('short_description');
        CRUD::column('content');
        CRUD::column('thumbnill_image');
        CRUD::column('banner_image');
        CRUD::column('seo_keywords');
        CRUD::column('seo_meta');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

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
        CRUD::field('thumbnill_image');
        CRUD::field('category_id');
        CRUD::field('banner_image');
        CRUD::field('seo_keywords');
        CRUD::field('seo_meta');

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
    public function create(){
        $categories = DB::table('knowledge_categories')->get();
        return view('Admin.knowledges.create',['categories'=>$categories]);
    }

    public function store(Request $request, imageService $imageService,slugGenerator $slugGenerator){
      

       $thumbnill_image = $imageService->insertImage($request,'knowledge');
       $banner_image = $imageService->bannerImage($request,'knowledge-banner');
       $seo_keyword = addslashes($request->seo_keyword);
        $seo_meta = addslashes($request->seo_meta);
        $slug = $slugGenerator->generateSlug('knowledges', $request->title);
        $insert = DB::table('knowledges')->insert([
            "title" => $request->title,
            "short_description" => $request->short_description,
            "content" => $request->content,
            "slug" => $slug,
            "thumbnill_image" => $thumbnill_image,
            "banner_image" => $banner_image,
            "category_id" => implode(',', (array) $request->input('category_id', [])),
            
            "table_of_contents" => $request->tab_content,
            
            "seo_keywords" => $seo_keyword,
            "seo_meta" => $seo_meta,
            "created_at" => Carbon::now()
        ]);

        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect('/admin/knowledges');
    }
    public function edit($id){
        $categories = KnowledgeCategory::all();
        $data = DB::table('knowledges')->where('id','=',$id)->first();
        return view('Admin.knowledges.edit',['categories'=>$categories,'data'=>$data]);
    }
    public function update(Request $request,imageService $imageService,slugGenerator $slugGenerator,$id){
        $seo_keyword = addslashes($request->seo_keyword);
        $seo_meta = addslashes($request->seo_meta);
        $slug = $slugGenerator->generateSlug('knowledges', $request->title);
        $findImage = DB::table('knowledges')->where('id', $id)->first();
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
            "table_of_contents" => $request->tab_content,
            "seo_keywords" => $seo_keyword,
            "seo_meta" => $seo_meta,
            "updated_at" => Carbon::now()
        ];
        if ($request->hasFile('image')) {
            $data["thumbnill_image"] = $imageService->insertImage($request, 'knowledge');
        }
        if ($request->hasFile('banner_image')) {
            $data["banner_image"] = $imageService->bannerImage($request, 'knowledge-banner');
        }

        $update = DB::table('knowledges')->where('id', '=', $id)->update($data);
        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect('/admin/knowledges/');

    }
}
