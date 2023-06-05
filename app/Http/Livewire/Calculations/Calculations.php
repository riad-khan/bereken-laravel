<?php

namespace App\Http\Livewire\Calculations;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Calculations extends Component
{
    public $seo_data;
    public function render()
    {
        return view('livewire.calculations.calculations');
    }
    public function mount(){
        $seo = DB::table('seo_data_tables')->where('page','=','calculations')
        ->orderByDesc('id')->limit(1)->get();
        $this->seo_data = $seo;
    }
}
