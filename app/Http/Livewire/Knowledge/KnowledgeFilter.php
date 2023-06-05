<?php

namespace App\Http\Livewire\Knowledge;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class KnowledgeFilter extends Component
{
    public $filterKnowledge;
    public $categoryName;
    public function render()
    {
        return view('livewire.knowledge.knowledge-filter');
    }
    public function mount($slug){
        $exploded_slug = explode('-',$slug);
        $id = end($exploded_slug);
       $knowledges = DB::select('select * from knowledges where FIND_IN_SET('.$id.',category_id) order by id DESC');
        $category_name = DB::table('knowledge_categories')->where('id','=',$id)->get();
        $this->categoryName = $category_name;
       $this->filterKnowledge = $knowledges;
    }
}
