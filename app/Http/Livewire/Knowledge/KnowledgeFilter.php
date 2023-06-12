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

        $sql = 'select 
        a.*,
        e.url as thumbnill_image
        from knowledges a 
        left join knowledges_knowledge_categories_links b on b.knowledge_id = a.id
        left join knowledge_categories c on c.id = b.knowledge_category_id
        left join files_related_morphs d on (d.related_id = a.id and d.field = "knowledge_image")
        left join files e on e.id = d.file_id
        WHERE c.id = ? order by a.id DESC';

       $knowledges = DB::select($sql,[$id]);
        $category_name = DB::table('knowledge_categories')->where('id','=',$id)->get();
        $this->categoryName = $category_name;
       $this->filterKnowledge = $knowledges;
    }
}
