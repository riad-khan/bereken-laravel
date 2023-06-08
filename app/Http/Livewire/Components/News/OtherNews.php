<?php

namespace App\Http\Livewire\Components\News;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OtherNews extends Component
{
    public $otherNews;
    public $category;
    public function render()
    {
        return view('livewire.components.news.other-news');
    }
    public function mount($category)
    {
        $data = [];
        $this->category = $category;
        if ($this->category == 'all') {
            $othersNewsSql = 'select a.*,GROUP_CONCAT(DISTINCT c.category_name) as category,e.url as thumbnill_image from news a
            left join news_categories_links b on b.news_section_id = a.id
            left join categories c on c.id = b.category_id
            left join files_related_morphs d on (d.related_id = a.id and d.field="news_image")
            left join files e on e.id = d.file_id
            where a.hot_article <> 1 and a.highlights <> 1
            group by a.id ORDER BY a.id DESC limit 4'; 
            
            $data = DB::select($othersNewsSql);
            $this->otherNews = $data;
        }else{
            $othersNewsSql = 'select a.*,GROUP_CONCAT(DISTINCT c.category_name) as category,e.url as thumbnill_image from news a
            left join news_categories_links b on b.news_section_id = a.id
            left join categories c on c.id = b.category_id
            left join files_related_morphs d on (d.related_id = a.id and d.field="news_image")
            left join files e on e.id = d.file_id
            where a.hot_article <> 1 and a.highlights <> 1 and c.id = ?
            group by a.id ORDER BY a.id DESC limit 4'; 
            $data = DB::select($othersNewsSql,[$this->category]);
            $this->otherNews = $data;
        }
    }
}
