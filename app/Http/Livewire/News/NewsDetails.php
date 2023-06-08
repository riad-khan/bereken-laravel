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
        $news_details = 'select a.id,a.title,a.short_description,a.content,a.slug,a.table_of_contents,
        GROUP_CONCAT(DISTINCT c.category_name) as category_name,
        GROUP_CONCAT(DISTINCT c.id) as category_id,
        GROUP_CONCAT(DISTINCT e.tag_name) as tag,
        g.url as thumbnill_image
        from news a
        left join news_categories_links b on b.news_section_id = a.id
        left join categories c on c.id = b.category_id
        left join news_tags_links d on d.news_section_id = a.id
        left join tags e on e.id = d.tag_id
        left join  files_related_morphs f on (f.related_id = a.id and f.field="news_image")
        left join files g on g.id = f.file_id
        where a.id = ?';
        $data = DB::select($news_details,[$id]);

        
      $category_id = explode(',', $data[0]->category_id);
       
         $recentSql = 'select a.id,a.title,a.short_description,a.content,a.slug,a.table_of_contents,
         d.url as thumbnill_image
         from news a
         left join news_categories_links b on b.news_section_id = a.id
         left join  files_related_morphs c on (c.related_id = a.id and c.field="news_image")
         left join files d on d.id = c.file_id
         where b.category_id = ? order by a.id DESC limit 5';
         $recentData = DB::select($recentSql,[$category_id[0]]);
        
         $this->recents = $recentData;
        $this->details = $data;
    }
}
