<?php

namespace App\Http\Livewire\Components\BMI;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BmiFaq extends Component
{
    public $faq;
    public function render()
    {
        return view('livewire.components.b-m-i.bmi-faq');
    }

    public function mount(){
        $bmiFaqs = DB::table('faqs')->where('calculator_id','=',1)->get();
        $this->faq = $bmiFaqs;
    }
}
