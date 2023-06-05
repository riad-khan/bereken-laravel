<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TagRequest;
use App\service\slugGenerator;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class TagCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TagCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Tag::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tag');
        CRUD::setEntityNameStrings('tag', 'tags');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('tag_name');
        CRUD::column('slug');
        CRUD::column('created_at');

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

        CRUD::field('tag_name');


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    public function store(Request $request, slugGenerator $slugGenerator)
    {
        $validation = $request->validate([
            'tag_name'=>'required|max:255|unique:tags'
        ]);


        // register any Model Events defined on fields


        // insert item in the db

        $slug = $slugGenerator->generateSlug('tags',$request->tag_name);

        $insert = DB::table('tags')->insert([
            'tag_name'=>$request->tag_name,
            'slug'=>$slug,
            'created_at'=>Carbon::now()
        ]);

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();

        return redirect('/admin/tag');
    }

    public function update(Request $request,slugGenerator $slugGenerator,$id)
    {
        $this->crud->hasAccessOrFail('update');

        $validation = $request->validate([
            'tag_name'=>'required|max:255|unique:tags'
        ]);


        // update the row in the db
        $slug = $slugGenerator->generateSlug('tags',$request->tag_name);

        $insert = DB::table('tags')->where('id','=',$id)->update([
            'tag_name'=>$request->tag_name,
            'slug'=>$slug,
            'created_at'=>Carbon::now()
        ]);

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // Redirects user
        return redirect('/admin/tag');


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
