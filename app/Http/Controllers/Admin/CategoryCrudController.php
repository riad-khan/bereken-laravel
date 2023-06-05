<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\service\slugGenerator;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings('category', 'categories');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('category_name');
        CRUD::column('slug');
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

        CRUD::field('category_name');


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    public function store(Request $request, slugGenerator $slugGenerator)
    {
        $this->crud->hasAccessOrFail('create');
        $validate = $request->validate([
            'category_name'=>'required|max:255|unique:categories',
        ]);

        $slug = $slugGenerator->generateSlug('categories',$request->category_name);

        $insert = DB::table('categories')->insert([
            'category_name'=>$request->category_name,
            'slug'=>$slug,
            'created_at'=>Carbon::now()
        ]);

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // Redirects user
        return redirect('/admin/category');


    }

    public function update(Request $request,slugGenerator $slugGenerator,$id)
    {
        $this->crud->hasAccessOrFail('create');
        $validate = $request->validate([
            'category_name'=>'required|max:255|unique:categories',
        ]);

        $slug = $slugGenerator->generateSlug('categories',$request->category_name);

        $update = DB::table('categories')->where('id','=',$id)->update([
            'category_name'=>$request->category_name,
            'slug'=>$slug,
            'updated_at'=>Carbon::now()
        ]);

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // Redirects user
        return redirect('/admin/category');
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
