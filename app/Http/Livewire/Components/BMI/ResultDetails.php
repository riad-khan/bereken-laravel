<?php

namespace App\Http\Livewire\Components\BMI;

use Livewire\Component;

class ResultDetails extends Component
{
    public $bmis;
    public $results;
    public function render()
    {
        return view('livewire.components.b-m-i.result-details');
    }
    public function mount($bmis,$results){
        $this->bmis = $bmis;
        $this->$results = $results;
    }
}
