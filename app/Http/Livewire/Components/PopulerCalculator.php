<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PopulerCalculator extends Component
{
    public $calculators;
    public $text;
    public $url;
    
    public function render()
    {
        return view('livewire.components.populer-calculator');
    }

    public function mount($text,$url){
        $sql = 'select a.id,a.section_title,a.status from populer_calculators a';

        $calculators = DB::select($sql);

        $this->calculators = $calculators;
        $this->text = $text;
        $this->url = $url;
    }
}
