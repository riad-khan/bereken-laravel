<?php

namespace App\Http\Livewire\Components\Vats;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FaqSection extends Component
{
    public $faqs;
    public function render()
    {
        return view('livewire.components.vats.faq-section');
    }
    public function mount(){
        $vatFaqs = DB::table('faqs')->where('calculator_id','=',2)->get();
        $this->faqs = $vatFaqs;
    }
}
