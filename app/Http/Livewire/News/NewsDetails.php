<?php

namespace App\Http\Livewire\News;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewsDetails extends Component
{
    public $details;
    public $recents;
    public function render()
    {
        return view('livewire.news.news-details');
    }
    public function mount($slug)
    {
        $explode_Sulg = explode("-",$slug);
        $id = end($explode_Sulg);
        $news_details = 'select news.*, GROUP_CONCAT(tag_name) as tag from news
         join tags on find_in_set(tags.id, news.tag_id) 
         where news.id = ' . $id . ' group by news.id 
         ORDER by news.id DESC limit 4';
        $data = DB::select($news_details);

        
      $category_id = explode(',', $data[0]->category_id);
       
         $recentSql = "select a.* from news a where FIND_IN_SET(".$data[0]->category_id[0].",a.category_id) and a.id <> ".$id." limit 5";
         $recentData = DB::select($recentSql);
        
         $this->recents = $recentData;
        $this->details = $data;
    }
}
