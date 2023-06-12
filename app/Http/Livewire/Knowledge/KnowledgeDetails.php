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

        $sql = 'select 
        a.*,
        c.id as category_id,
        c.category_name,
        e.url as banner_image
        
        from knowledges a 
        left join knowledges_knowledge_categories_links b on b.knowledge_id = a.id
        left join categories c on c.id = b.knowledge_category_id
        left join files_related_morphs d on ( d.related_id = a.id and d.field="knowledge_image" )
        left join files e on e.id = d.file_id
        where a.id = ?';

        $knowledge_details = DB::select($sql,[$id]);

        
        $this->details = $knowledge_details;

    }
}
