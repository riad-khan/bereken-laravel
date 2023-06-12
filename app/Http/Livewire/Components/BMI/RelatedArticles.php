<?php

namespace App\Http\Livewire\Components\BMI;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RelatedArticles extends Component
{
    public $articles;
   
    public function render()
    {
        return view('livewire.components.b-m-i.related-articles');
    }
    public function mount(){
        $sql='select 
        a.id,
        a.title,
        a.slug,
        e.url as banner_image
        from news a 
        left join news_categories_links b on b.news_section_id = a.id
        left join categories c on c.id = b.category_id
        left join files_related_morphs d on (d.related_id = a.id and d.field="news_image")
        left join files e on d.file_id = e.id
        where c.category_name = "bmi"';
        $related_articles = DB::select($sql);
        $this->articles = $related_articles;
        
    }
}
