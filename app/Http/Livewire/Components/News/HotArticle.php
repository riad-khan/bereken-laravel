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
            $articles = DB::select('select a.*,b.category_name,b.slug as category_slug from news a INNER JOIN categories b on a.category_id = b.id where a.hot_article = 1 GROUP by a.id order by a.id DESC limit 5;');
            $this->hotArticle = $articles;
        }else{
            $articles = DB::select('select a.*,b.category_name,b.slug as category_slug from news a INNER JOIN categories b on FIND_IN_SET(b.id,category_id) where FIND_IN_SET('.$this->category.',a.category_id) and a.hot_article = 1  GROUP by a.id order by a.id DESC limit 5');
            $this->hotArticle = $articles;
        }
    }
}
