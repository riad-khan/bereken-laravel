<?php

namespace App\Http\Livewire\Components\Vats;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FeaturedCalculators extends Component
{
    public $featured_Calculators;
    public function render()
    {
        return view('livewire.components.vats.featured-calculators');
    }
    public function mount(){
        $calculators = DB::select('SELECT a.* from calculator_lists a JOIN featured_calculators b on a.id = b.featured_calculator where b.main_calculator = 2 ORDER by b.sort_order');
        $this->featured_Calculators = $calculators;
    }
}
