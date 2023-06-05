<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AccuratesRequest;
use App\service\imageService;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class AccuratesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AccuratesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Accurates::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/accurates');
        CRUD::setEntityNameStrings('accurates', 'accurates');
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
        CRUD::column('images');
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

        CRUD::addField('title');
        CRUD::field('short_description');
        CRUD::field('images')->type('upload');

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
        return view('Admin.accurates.create');
    }
    public function store(Request $request,imageService $imageService){
       $validate = $request->validate([
        'title'=>'required',
        'image'=>'mimes:jpeg,jpg,png,gif,svg|required',
        'short_description'=>'required'
       ]);
       $image = $imageService->insertImage($request,'accurates');
       $store = DB::table('accurates')->insert([
        'title'=>$request->title,
        'short_description'=>$request->short_description,
        'images'=>$image
       ]);

       \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect('/admin/accurates/');
    }
    public function edit($id){
        $data = DB::table('accurates')->where('id','=',$id)->get();
        return view('Admin.accurates.edit',['data'=>$data]);
    }
    public function update(Request $request,$id,imageService $imageService)
    {
        $data = [
            "title"=>$request->title,
            "short_description"=>$request->short_description
        ];
        if ($request->hasFile('image')) {
            $find = DB::table('accurates')->where('id','=',$id)->first();
            $oldImage = $find->images;
            $path  = public_path($oldImage);
            if (is_file($path)) {
                unlink($oldImage);
            }
        }
        if ($request->hasFile('image')) {
            $data['images'] = $imageService->insertImage($request, 'accurates');
        }
        $update = DB::table('accurates')->where('id','=',$id)->update($data);
        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect('/admin/accurates/');
    }
}
