<?php

namespace App\Http\Livewire\Components\BMI;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RelatedArticles extends Component
{
    public $articles;
   
    public function render()
    {
        return view('livewire.components.b-m-i.related-articles');
    }
    public function mount(){
        $related_articles = DB::select('SELECT a.*,b.category_name from news a join categories b on find_in_set(b.id,a.category_id) WHERE b.category_name ="bmi" order by a.id DESC limit 5');
        $this->articles = $related_articles;
        
    }
}
