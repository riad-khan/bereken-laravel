<?php

namespace App\Http\Livewire\Components\NewsSlider;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewsSlider extends Component
{
    public $lattest_news;
    public function render()
    {
        return view('livewire.components.news-slider.news-slider');
    }
    public function mount(){
        $sql = 'select 
        a.*,
        c.url as thumbnill_image
        from news a 
        left join files_related_morphs b on (b.related_id = a.id and b.field="news_image")
        left join files c on c.id = b.file_id
        order by a.id limit 10';
        $data = DB::select($sql);
        $this->lattest_news = $data;
    }
}
