<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PopulerCalculator extends Component
{
    public $calculators;

    public function render()
    {
        return view('livewire.components.populer-calculator');
    }

    public function mount(){
        $sql = 'select a.* from calculator_lists a INNER join populer_calculators b on a.id = b.calculator_id ORDER by b.display_order;';

        $calculators = DB::select($sql);

        $this->calculators = $calculators;
    }
}
