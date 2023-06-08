<?php

namespace App\Http\Livewire\Components\News;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HotArticle extends Component
{
    public $hotArticle;
    public $category;
    public function render()
    {
        return view('livewire.components.news.hot-article');
    }
    public function mount($category)
    {

        $articles = [];

        $this->category = $category;

        if ($this->category == 'all') {
            $articles = DB::select('select a.*,e.url as thumbnill_image from news a

            left join news_categories_links b on b.news_section_id = a.id
            left join categories c on c.id = b.category_id
            left join files_related_morphs d on (d.related_id = a.id and d.field = "news_image")
            left join files e on e.id = d.file_id
            where a.hot_article  = 1 group by a.id
                        order by a.id DESC limit 5');
            $this->hotArticle = $articles;
        } else {
            $articles = DB::select('select a.*,e.url as thumbnill_image from news a
            left join news_categories_links b on b.news_section_id = a.id
            left join categories c on c.id = b.category_id
            left join files_related_morphs d on (d.related_id = a.id and d.field = "news_image")
            left join files e on e.id = d.file_id
            where a.hot_article = 1 and c.id = ' . $this->category . ' group by a.id
            
            order by a.id DESC limit 5');
            $this->hotArticle = $articles;
        }
    }
}
