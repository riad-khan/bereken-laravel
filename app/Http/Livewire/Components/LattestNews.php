<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LattestNews extends Component
{
  public $button_text;
  public $link;
  public $title;

  public function render()
  {
    $lattest_news = DB::select('select 
        a.id,
        a.title,
        a.short_description,
        a.content,
        a.slug,
        e.url as image,
        a.created_at,
        GROUP_CONCAT(DISTINCT c.category_name) as category_name
        
        from news a 
        left join news_categories_links b on b.news_section_id = a.id
        left join categories c on c.id = b.category_id
        left join files_related_morphs d on (d.related_id = a.id and d.field = "news_image")
        left join files e on e.id = d.file_id
        group by a.id order by a.id DESC limit 4');


    return view('livewire.components.lattest-news', ['news' => $lattest_news]);
  }
  public function mount($title,$buttontext, $link)
  {
    $this->button_text = $buttontext;
    $this->link = $link;
    $this->title = $title;
  }
}
