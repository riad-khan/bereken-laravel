<?php

namespace App\Http\Livewire\Search;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SearchNews extends Component
{
    public $search;
    public $news;
    protected $queryString = ['search'];
    public function render()
    {
        return view('livewire.search.search-news');
    }

    public function mount(){
        $dcrypted_search = Crypt::decrypt($this->search);
        $result = DB::select('select news.*, GROUP_CONCAT(category_name) as category_name from news join categories on find_in_set(categories.id, news.category_id) where news.title LIKE "%'.$dcrypted_search.'%" group by news.id ORDER by news.id DESC;');
        $this->news = $result;
    }
}
