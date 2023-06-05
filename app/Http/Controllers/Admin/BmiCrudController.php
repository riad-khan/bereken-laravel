<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BmiRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class BmiCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BmiCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Bmi::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/bmi');
        CRUD::setEntityNameStrings('bmi', 'bmis');

    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('gender_label');
        CRUD::column('content');
        CRUD::column('updated_at');
        $this->crud->removeButton('create');
        $this->crud->removeButton('delete');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }
    public function getBmi(Request $request){

        $draw=$request->draw;
        $limit=$request->length;
        $search_value=addslashes($request->search['value']);
        $start=$request->start;
        $order_by=$request->order[0]['dir'];

        $sql="SELECT
        a.*
        FROM faqs a
        where a.calculator_id=1 ";
        if($search_value){
            $sql.="and a.title like '{$search_value}%' ";
        }
        $sql.="order by a.title {$order_by} limit {$start}, {$limit}";
        $data=DB::select($sql);

        $rows=count($data);
        $sql="select count(a.id) as total from faqs a where a.calculator_id=1";
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
                <a href="/admin/faq/bmi/delete/'.$thisData->id.'" class="btn btn-danger btn-sm" ><i class="la la-trash"></i></a>'
            );
        }
        echo'{
            "draw":'.$draw.',
            "recordsTotal": '.$total[0]->total.',
            "recordsFiltered": '.$total[0]->total.',
            "data": '.json_encode($dataArray).'
          }';
    }
    public function bmiFaqPage(){
        return view('Admin.calculator.bmi.faq');
    }
    public function update(Request $request,$id)
    {
       $update = DB::table('bmis')->where('id','=',$id)->update([
           'gender_label'=>$request->gender_label,
           'gender_caption'=>$request->gender_caption,
           'age_label'=> $request->age_label,
           'age_caption'=>$request->age_caption,
           'weight_label'=>$request->weight_label,
           'height_label'=>$request->height_label,
           'height_caption'=>$request->height_caption,
           'button_text'=>$request->button_text,
           'button_details'=>$request->button_details,
           'result_content'=>$request->result_content,
           'content'=>$request->details,
           'seo_title'=>$request->seo_title,
           'seo_meta'=>$request->seo_meta,
           'seo_keywords'=>$request->seo_keywords,
           'updated_at'=>Carbon::now(),
       ]);
      
    $calculator_name = $request->menu_name;

    for($i =0; $i < count($calculator_name); $i++){
            $data = [];
            if($request->id[$i] == 0){
                $data["calculator_id"] = 1;
                $data['name'] = $calculator_name[$i];
                $data['link'] = $request->menu_link[$i];
                
                $insert = DB::table('others_calculators')->insert($data);
            }else{
                $data["calculator_id"] = 1;
                $data['name'] = $calculator_name[$i];
                $data['link'] = $request->menu_link[$i];
                $update = DB::table('others_calculators')->where('id','=',$request->id[$i])->update($data);
            }
    }

    \Alert::success(trans('backpack::crud.update_success'))->flash();
    return redirect('/admin/bmi');

    }

    public function createFAQ(Request $request){
       $insert = DB::table('faqs')->insert([
           'title'=>$request->title,
           'content'=>$request->description,
           'calculator_id'=>$request->calculator_id,
           'sort_order'=>'0',
           'created_at'=>Carbon::now()
       ]);

        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect()->back();
    }
    public function deleteFaq($id){
      $delete = DB::table('faqs')->where('id','=',$id)->delete();

        \Alert::success(trans('backpack::crud.delete_success'))->flash();
        return redirect('/admin/bmi/faq');
    }
    public function editFaq($id){
        $find = DB::table('faqs')->where('id','=',$id)->get();
        return view('Admin.calculator.FAQ.edit',['details'=>$find]);
    }
    public function updateFaq(Request $request,$id){
        $update = DB::table('faqs')->where('id','=',$id)->update([
            'title'=>$request->title,
            'content'=>$request->description,
            'updated_at'=>Carbon::now()
        ]);
        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect()->back();
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



        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

public function edit($id){
        $bmiData = DB::table('bmis')->where('id','=',$id)->get();
    $query= 'select * from calculator_lists a WHERE a.id<> 1 and NOT EXISTS (SELECT * from featured_calculators b where b.featured_calculator = a.id);';
    $calculator_list = DB::select($query );
    return view('Admin.calculator.bmi.edit',['lists'=>$calculator_list,'details'=>$bmiData]);
}



   public function checkBoxList($id){
       $query= 'select * from calculator_lists a WHERE a.id<> '.$id.' and NOT EXISTS (SELECT * from featured_calculators b where b.featured_calculator = a.id and b.main_calculator = '.$id.');';
       $calculator_list = DB::select($query );
       foreach ($calculator_list as $item){
           echo ' <div class="form-check" >
                                                        <input class="form-check-input" name="category_id" type="checkbox" onchange="listSubmit(this.value)" value="'.$item->id.'" id="calculators">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                           '.$item->calculator_name.'
                                                        </label>
                                                    </div>';
       }
   }


    public function featured_Calculator(Request $request){
        $featured_id = $request->featured_id;
        $main_calculator = $request->main_id;

        $inser_Featured = DB::table('featured_calculators')->insert([
            "main_calculator"=>$main_calculator,
            "featured_calculator"=>$featured_id,
            "sort_order"=>0
        ]);

    }

    public function getFeaturedList($id){
        $query = 'SELECT a.*,b.calculator_name FROM `featured_calculators` a inner Join calculator_lists b on a.`featured_calculator` = b.id   where a.main_calculator = '.$id.' order by sort_order;';
        $data = DB::select($query);

        foreach ($data as $item){
            echo '     <div class="form-check" id="'.$item->id.'" >
                                <i class="las la-times-circle" style="font-size: 19px;cursor: pointer" onclick="deleteFeatured('.$item->id.')"></i>
                                 <label class="form-check-label" id="'.$item->id.'" for="flexCheckDefault">
                                          '.$item->calculator_name.'
                             </label>
                          </div>';
        }
    }
    public function updateOrder(Request $request){

        $query = DB::table('featured_calculators')->where('id','=',$request->id)->update([
            "sort_order"=>$request->sorting
        ]);

    }
    public function deleteFeatured($id){
        $delete = DB::table('featured_calculators')->where('id', '=',$id)->delete();
    }
    

    public function createResultDetails(){
        return view('Admin.calculator.bmi.results');
    }
    public function getResultsData(Request $request){
        $draw=$request->draw;
        $limit=$request->length;
        $search_value=addslashes($request->search['value']);
        $start=$request->start;
        $order_by=$request->order[0]['dir'];

        $sql="SELECT
        a.*
        FROM bmi_results a 
        where 1=1 ";
        if($search_value){
            $sql.="and a.result_title like '{$search_value}%' ";
        }
        $sql.="order by a.result_title {$order_by} limit {$start}, {$limit}";
        $data=DB::select($sql);

        $rows=count($data);
        $sql="select count(a.id) as total from bmi_results a where 1=1";
        if($search_value){
            $sql.=" and a.result_title like '{$search_value}%' ";
        }
        $total=DB::select($sql);
        $dataArray=array();
        foreach($data as $thisData){
            $dataArray[]=array(
                $thisData->id,
                $thisData->result_title,
                $thisData->result_content,
                $thisData->bmi_from,
                $thisData->bmi_to,

                '<a href="/admin/bmi-result/edit/'.$thisData->id.'" class="btn btn-primary btn-sm"><i class="la la-pen"></i></a>
                <a href="/admin/bmi-result/delete/'.$thisData->id.'" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you confirm to delete?\')"><i class="la la-trash"></i></a>'
            );
        }
        echo'{
            "draw":'.$draw.',
            "recordsTotal": '.$total[0]->total.',
            "recordsFiltered": '.$total[0]->total.',
            "data": '.json_encode($dataArray).'
          }';
    }

    public function create_result(){
        $bmiNews = DB::table('news')
        ->select('news.id','news.title')
        ->join('categories','categories.id','=','news.category_id')
        ->where('categories.category_name','=','bmi')
        ->get();
                
        return view('Admin.calculator.bmi.create_result',['bmiNews'=>$bmiNews]);
    }

    public function storeBmiResult(Request $request){
        $store = DB::table('bmi_results')->insert([
            "result_title"=>$request->result_title,
            "result_content"=>$request->content,
            "bmi_from"=>$request->bmi_from,
            "bmi_to"=>$request->bmi_to,
            "most_read" =>implode(',',(array) $request->input('most_read', [])),
            "created_at"=>Carbon::now(),
        ]);
        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return redirect('/admin/bmi/results');
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
