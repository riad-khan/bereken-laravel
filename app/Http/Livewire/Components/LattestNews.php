<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LattestNews extends Component
{

    public function render()
    {
        $lattest_news = DB::select('select news.*, GROUP_CONCAT(category_name) as category_name from news join categories on find_in_set(categories.id, news.category_id) group by news.id ORDER by news.id DESC limit 4');

                       
      return view('livewire.components.lattest-news',['news'=>$lattest_news]);

      
    }
}
