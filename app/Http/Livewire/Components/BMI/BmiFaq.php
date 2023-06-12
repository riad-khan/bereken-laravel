<?php

namespace App\Http\Livewire\Components\BMI;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BmiFaq extends Component
{
    public $faq;
    public $bmi;
    public function render()
    {
        return view('livewire.components.b-m-i.bmi-faq');
    }

    public function mount($bmi){
        $this->bmi = $bmi;

        $sql = 'select 
        a.id,
        a.question,
        a.answer
        from components_shared_faqs a 
        left join bmis_components b on (b.component_id = a.id and b.field="bmi_faqs")
        where b.entity_id = ? ORDER by b.order;';

        $bmiFaqs = DB::select($sql,[$this->bmi]);
        $this->faq = $bmiFaqs;
    }
}
