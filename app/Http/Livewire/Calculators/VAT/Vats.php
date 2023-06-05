<?php

namespace App\Http\Livewire\Calculators\VAT;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Vats extends Component
{
    public $details;
    public function render()
    {
        return view('livewire.calculators.v-a-t.vats');
    }
    public function mount(){
        $details = DB::table('vats')->limit(1)->orderByDesc('id')->get();
        $this->details = $details;
    }

}
