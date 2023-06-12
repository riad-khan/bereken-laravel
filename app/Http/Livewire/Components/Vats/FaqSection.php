<?php

namespace App\Http\Livewire\Components\Vats;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FaqSection extends Component
{
    public $faqs;
    public $vat;
    public function render()
    {
        return view('livewire.components.vats.faq-section');
    }
    public function mount($vat){
        $this->vat = $vat;
        $sql = 'select 
        a.id,
        a.question,
        a.answer
        from components_shared_faqs a 
        left join vats_components b on (b.component_id = a.id and b.field="vat_faqs")
        where b.entity_id = ? ORDER by b.order;';

        $vatFaqs = DB::select($sql,[$this->vat]);
        $this->faqs = $vatFaqs;
    }
}
