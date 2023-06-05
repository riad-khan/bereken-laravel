<?php

namespace App\Http\Livewire\Components\BMI;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FeaturedCalculators extends Component
{
    public $featured_Calculators;
    public function render()
    {
        return view('livewire.components.b-m-i.featured-calculators');
    }

    public function mount(){
        $calculators = DB::select('SELECT a.* from calculator_lists a JOIN featured_calculators b on a.id = b.featured_calculator where b.main_calculator = 1 ORDER by b.sort_order');
        $this->featured_Calculators = $calculators;
    }
}
