<?php

namespace App\Http\Livewire\Knowledge;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class KnowledgeDetails extends Component
{
    public $details;
    public function render()
    {
        return view('livewire.knowledge.knowledge-details');
    }
    public function mount($slug){
        $explode_Sulg = explode("-",$slug);
        $id = end($explode_Sulg);

        $knowledge_details = DB::table('knowledges')->where('id','=',$id)->get();
        $this->details = $knowledge_details;

    }
}
