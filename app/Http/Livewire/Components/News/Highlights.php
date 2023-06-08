<?php

namespace App\Http\Livewire\Components\News;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Highlights extends Component
{
    public $highlights;
    public $category;
    public function render()
    {
        return view('livewire.components.news.highlights');
    }

    public function mount($category)
    {
        $highlightsArticle = [];
        $this->category = $category;
       
        if ($this->category == 'all') {
            $highlightsArticle = DB::select('select a.*,GROUP_CONCAT(DISTINCT c.category_name) as category_name,e.url as thumbnill_image from news a
            left join news_categories_links b on b.news_section_id = a.id
            left join categories c on c.id = b.category_id
            left join files_related_morphs d on (d.related_id = a.id and d.field="news_image")
            left join files e on e.id = d.file_id
            where a.highlights = 1
            group by a.id ORDER by a.id DESC limit 4');
            $this->highlights = $highlightsArticle;
        }else{
            $highlightsArticle = DB::select('select a.*,GROUP_CONCAT(DISTINCT c.category_name) as category_name,e.url as thumbnill_image from news a
            left join news_categories_links b on b.news_section_id = a.id
            left join categories c on c.id = b.category_id
            left join files_related_morphs d on (d.related_id = a.id and d.field="news_image")
            left join files e on e.id = d.file_id
            where a.highlights = 1 and c.id = '.$this->category.'
            group by a.id ORDER by a.id DESC limit 4');
            $this->highlights = $highlightsArticle;
        }
    }
}
