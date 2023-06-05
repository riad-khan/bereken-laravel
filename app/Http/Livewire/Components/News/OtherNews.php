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
            $othersNewsSql = 'select news.*, 
            GROUP_CONCAT(category_name) as category,
            categories.slug as category_slug from news 
            join categories on find_in_set(categories.id, news.category_id) 
            where news.highlights <> 1 and news.hot_article <> 1 
            group by news.id ORDER by news.id DESC limit 4'; 
            
            $data = DB::select($othersNewsSql);
            $this->otherNews = $data;
        }else{
            $othersNewsSql = 'select news.*, GROUP_CONCAT(category_name) as category,categories.slug as category_slug from news join categories on find_in_set(categories.id, news.category_id) where FIND_IN_SET('.$this->category.',news.category_id) and news.highlights <> 1 and news.hot_article <> 1 group by news.id ORDER by news.id DESC limit 4'; 
            $data = DB::select($othersNewsSql);
            $this->otherNews = $data;
        }
    }
}
