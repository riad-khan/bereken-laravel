<?php

namespace App\Http\Controllers\Frontend\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BMIController extends Controller
{
    public function calculate(Request $request){
         $validate = $request->validate([
             'gender'=>'required',
             'age'=>'required|numeric|min:0|max:120',
             'weight'=>'required|numeric',
             'height'=>'required|numeric',
         ]);

        $gender = $request->gender;
        $age = $request->age;
        $height = $request->height;
        $weight = $request->weight;
        //convert cm to meter
        $heightMeter = $height / 100 ;
        $heightSquare = pow($heightMeter,2);

        $bmi = $weight / $heightSquare ;

        $calculation_result = number_format($bmi, 1, '.', '');



       return redirect()->to('/bmi/calculator-results/'.base64_encode($gender).'/'.base64_encode($heightSquare).'/'.base64_encode($calculation_result).'');
    }
}
