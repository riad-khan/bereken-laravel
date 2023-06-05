<?php

namespace App\Http\Livewire\Knowledge;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Knowledge extends Component
{
    public $categories;
    public $seo_data;
    public function render()
    {
        return view('livewire.knowledge.knowledge');
    }
    public function mount(){
        $categories = DB::table('knowledge_categories')->get();
        $seo = DB::table('seo_data_tables')->where('page','=','knowledge')
        ->orderByDesc('id')->limit(1)->get();
        $this->seo_data = $seo;
        $this->categories = $categories;
    }
}
