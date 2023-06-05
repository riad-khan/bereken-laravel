<?php

namespace App\Http\Livewire\Components\Vats;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RelatedNews extends Component
{
    public $articles;
    public function render()
    {
        return view('livewire.components.vats.related-news');
    }
    public function mount(){
        $related_articles = DB::select('SELECT a.*,b.category_name from news a join categories b on find_in_set(b.id,a.category_id) WHERE b.category_name ="vat" order by a.id DESC limit 5');
        $this->articles = $related_articles;
    }
}
