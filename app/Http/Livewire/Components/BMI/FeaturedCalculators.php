<?php

namespace App\Http\Livewire\Components\BMI;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FeaturedCalculators extends Component
{
    public $featured_Calculators;
    public $bmi;
    public function render()
    {
        return view('livewire.components.b-m-i.featured-calculators');
    }

    public function mount($bmi){
        $this->bmi = $bmi;
        $sql = 'select 
        b.calculator_name,
        b.link,
        d.url as icon
        from bmis_featured_calculators_links a 
        left join calculator_lists b on b.id = a.calculator_list_id
        left join files_related_morphs c on (c.related_id = b.id and c.field="calculator_icon")
        left join files d on d.id = c.file_id
        where a.bmi_id = ?';
        $calculators = DB::select($sql,[$this->bmi]);
        $this->featured_Calculators = $calculators;
    }
}
