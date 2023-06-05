<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PopulerCalculator extends Controller
{
    public function index(){
        return view('Admin.populer_calculator');
    }
    public function calculator_list(){
        $list = DB::select('select * from calculator_lists a WHERE  NOT EXISTS (SELECT * from populer_calculators b where b.calculator_id = a.id);');
        foreach($list as $item){
            echo ' <div class="form-check" >
            <input class="form-check-input" name="category_id" type="checkbox" onchange="populerCalculator(this.value)" value="'.$item->id.'" id="calculators">
            <label class="form-check-label" for="flexCheckDefault">
               '.$item->calculator_name.'
            </label>
        </div>';
        }
    }

    public function insert_populer(Request $request){
        $insert = DB::table('populer_calculators')->insert([
            'calculator_id'=>$request->calculator_id,
            'display_order'=>'0',
        ]);
    }
    public function get_populer_calculators(){
        $query = 'select a.calculator_name,b.* from calculator_lists a inner join populer_calculators b on a.id = b.calculator_id order by display_order;';
        $data = DB::select($query);

        foreach ($data as $item){
            echo '     <div class="form-check" id="'.$item->id.'" >
                                <i class="las la-times-circle" style="font-size: 19px;cursor: pointer" onclick="deletePopuler('.$item->id.')"></i>
                                 <label class="form-check-label" id="'.$item->id.'" for="flexCheckDefault">
                                          '.$item->calculator_name.'
                             </label>
                          </div>';
        }
    }

    public function delete_populer($id){
        $delete = DB::table('populer_calculators')->where('id','=',$id)->delete();
    }
    public function updateOrder(Request $request){

        $query = DB::table('populer_calculators')->where('id','=',$request->id)->update([
            "display_order"=>$request->sorting
        ]);

    }

    public function updateStatus(Request $request){
        $update = DB::table('section_control')->where('id','=',$request->id)->update([
            "status"=>$request->status,
        ]);

        return response()->json('updated');
    }
}
