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
            $highlightsArticle = DB::select('select news.*, GROUP_CONCAT(category_name) as categories from news join categories on find_in_set(categories.id, news.category_id) where news.highlights = 1 group by news.id ORDER by news.id DESC limit 4');
            $this->highlights = $highlightsArticle;
        }else{
            $highlightsArticle = DB::select('select news.*, GROUP_CONCAT(category_name) as categories from news join categories on find_in_set(categories.id, news.category_id) where news.highlights = 1 and categories.id = '.$this->category.' group by news.id ORDER by news.id DESC limit 4');
            $this->highlights = $highlightsArticle;
        }
    }
}
