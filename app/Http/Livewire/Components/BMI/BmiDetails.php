<?php

namespace App\Http\Livewire\Components\BMI;

use Livewire\Component;

class BmiDetails extends Component
{
    public $details;
    public function render()
    {
        return view('livewire.components.b-m-i.bmi-details');
    }
    public function mount($details){
        $this->details = $details;
    }
}
