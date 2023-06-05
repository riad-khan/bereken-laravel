<?php

namespace App\Http\Livewire\Compares;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Compares extends Component
{
    public $seo_data;
    public function render()
    {
        return view('livewire.compares.compares');
    }

    public function mount(){
        $data = DB::table('seo_data_tables')->where('page','=','compares')->orderByDesc('id')->limit(1)->get();
        $this->seo_data = $data;
    }
}
