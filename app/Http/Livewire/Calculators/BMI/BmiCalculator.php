<?php

namespace App\Http\Livewire\Calculators\BMI;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BmiCalculator extends Component
{
    public $stars ='';
    public $age;
    public $bmigender;
    public $height;
    public $weight;
    protected $rules = [
          
            'age'=>'required|numeric|min:0|max:120',
            'weight'=>'required|numeric',
            'height'=>'required|numeric',
    ];
    public function render()
    {
        $bmiDetails = DB::table('bmis')->limit(1)->get();
        return view('livewire.calculators.b-m-i.bmi-calculator', ['details' => $bmiDetails]);
    }
    public function submit()
    {
        $this->validate();

        $age = $this->age;
        $height = $this->height;
        $weight = $this->weight;

        //convert cm to meter
        $heightMeter = $height / 100 ;
        $heightSquare = pow($heightMeter,2);

        $bmi = $weight / $heightSquare ;

        $calculation_result = number_format($bmi, 1, '.', '');
      
        $final_result = DB::select('select * from bmi_results WHERE '.$calculation_result.' BETWEEN `bmi_from` and `bmi_to`;');

        return redirect('/bmi/calculator-results');
    }

   public function mount(){
    for($i =1; $i <=5; $i++){
        $this->stars .= '<svg id="star" onclick="test('.$i.')" aria-hidden="true" class="modal-star w-5 h-5  text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Fifth star</title>
        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
        </path>
    </svg>';
    }    
}
// public function test($value){
//     for($i =1; $i <= $value; $i++){
//         $this->stars .= '<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
//         <title>First star</title>
//         <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
//         </path>
//      </svg>';
//     }   
// }
}
