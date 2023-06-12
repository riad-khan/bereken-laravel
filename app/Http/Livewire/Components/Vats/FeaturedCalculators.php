<?php

namespace App\Http\Livewire\Components\Vats;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FeaturedCalculators extends Component
{
    public $featured_Calculators;
    public $vat;
    public function render()
    {
        return view('livewire.components.vats.featured-calculators');
    }
    public function mount($vat){
        $this->vat = $vat;
        $sql ='select 
        b.calculator_name,
        b.link,
        d.url as icon
        from vats_featured_calculators_links a 
        left join calculator_lists b on b.id = a.calculator_list_id
        left join files_related_morphs c on (c.related_id = b.id and c.field="calculator_icon")
        left join files d on d.id = c.file_id
        where a.vat_id = ?';
        $calculators = DB::select($sql,[$this->vat]);
        $this->featured_Calculators = $calculators;
    }
}
