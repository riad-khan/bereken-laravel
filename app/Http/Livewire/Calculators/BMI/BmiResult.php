<?php

namespace App\Http\Livewire\Calculators\BMI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BmiResult extends Component
{
    public $bmi;
    public $gender;
    public $heightMeterSquare;
    public $result;
    public $idealStart;
    public $idealEnd;
    public function render()
    {
        return view('livewire.calculators.b-m-i.bmi-result');
    }
    public function mount($gender,$height,$bmi){
        $this->bmi = base64_decode($bmi);
        $this->gender = base64_decode($gender);
        $this->heightMeterSquare = base64_decode($height);
        $this->idealStart = number_format($this->heightMeterSquare * 18.5,1,'.','');
        $this->idealEnd = number_format($this->heightMeterSquare * 24.9,1,'.','');
        $final_result = DB::select('select * from bmi_results WHERE '.$this->bmi.' BETWEEN `bmi_from` and `bmi_to`;');
        $this->result = $final_result;

    }
}
