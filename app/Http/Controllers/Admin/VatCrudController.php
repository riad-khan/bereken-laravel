<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VatRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class VatCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VatCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Vat::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/vat');
        CRUD::setEntityNameStrings('vat', 'vats');
    }

    public function VatFaqPage(){
        return view('Admin.calculator.vat.faq');
    }

    public function getVatFaq(Request $request){

        $draw=$request->draw;
        $limit=$request->length;
        $search_value=addslashes($request->search['value']);
        $start=$request->start;
        $order_by=$request->order[0]['dir'];

        $sql="SELECT
        a.*
        FROM faqs a
        where a.calculator_id=2 ";
        if($search_value){
            $sql.="and a.title like '{$search_value}%' ";
        }
        $sql.="order by a.title {$order_by} limit {$start}, {$limit}";
        $data=DB::select($sql);

        $rows=count($data);
        $sql="select count(a.id) as total from faqs a where a.calculator_id=2";
        if($search_value){
            $sql.=" and a.title like '{$search_value}%' ";
        }
        $total=DB::select($sql);
        $dataArray=array();
        foreach($data as $thisData){
            $dataArray[]=array(
                $thisData->id,
                $thisData->title,
                $thisData->content,

                '<a href="/admin/faq/edit/'.$thisData->id.'" class="btn btn-primary btn-sm"><i class="la la-pen"></i></a>
                <a href="/admin/faq/vat/delete/'.$thisData->id.'" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you confirm to delete?\')"><i class="la la-trash"></i></a>'
            );
        }
        echo'{
            "draw":'.$draw.',
            "recordsTotal": '.$total[0]->total.',
            "recordsFiltered": '.$total[0]->total.',
            "data": '.json_encode($dataArray).'
          }';
    }

    public function deleteFaq($id){
        $delete = DB::table('faqs')->where('id','=',$id)->delete();

        \Alert::success(trans('backpack::crud.delete_success'))->flash();
        return redirect('/admin/vat/faq');
    }


    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('amount_label');
        CRUD::column('amount_tooltip');
        CRUD::column('convert_label');
        CRUD::column('convert_tooltip');
        CRUD::column('rate_label');
        CRUD::column('rate_tooltip');
        CRUD::column('button_text');
        CRUD::column('content');
        CRUD::column('seo_title');
        CRUD::column('seo_meta');
        CRUD::column('seo_keywords');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        $this->crud->removeButton('create');
        $this->crud->removeButton('delete');

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

        CRUD::field('amount_label');
        CRUD::field('amount_tooltip');

        CRUD::field('content');
        CRUD::field('seo_title');
        


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }
    public function update(Request $request,$id)
    {
       $update = DB::table('vats')->where('id','=',$id)->update([
           'amount_label'=>$request->amount_label,
           'amount_tooltip'=>$request->amount_tooltip,
           'convert_label'=>$request->convert_label,
           'convert_tooltip'=>$request->convert_tooltip,
           'rate_label'=>$request->rate_label,
           'rate_tooltip'=>$request->rate_tooltip,
           'button_text'=>$request->button_text,
           'content'=>$request->content,
           'result_content'=>$request->result_details,
           'seo_title'=>$request->seo_title,
           'seo_meta'=>$request->seo_meta,
           'seo_keywords'=>$request->seo_keywords,
       ]);

       $calculator_name = $request->menu_name;

       for($i =0; $i < count($calculator_name); $i++){
               $data = [];
               if($request->id[$i] == 0){
                   $data["calculator_id"] = 2;
                   $data['name'] = $calculator_name[$i];
                   $data['link'] = $request->menu_link[$i];
                   
                   $insert = DB::table('others_calculators')->insert($data);
               }else{
                   $data["calculator_id"] = 2;
                   $data['name'] = $calculator_name[$i];
                   $data['link'] = $request->menu_link[$i];
                   $update = DB::table('others_calculators')->where('id','=',$request->id[$i])->update($data);
               }
       }

        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect('/admin/vat');

    }

    public function edit($id)
    {
        $query= 'select * from calculator_lists a WHERE a.id<> 2 and NOT EXISTS (SELECT * from featured_calculators b where b.featured_calculator = a.id);';
        $vats_information = DB::table('vats')->where('id','=',$id)->get();
        $calculator_list = DB::select($query );
        return view('Admin.calculator.vat.edit',['details'=>$vats_information,'lists'=>$calculator_list]);
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
