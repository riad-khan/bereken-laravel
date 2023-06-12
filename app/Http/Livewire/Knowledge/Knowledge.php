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
      
        $this->categories = $categories;
    }
}
