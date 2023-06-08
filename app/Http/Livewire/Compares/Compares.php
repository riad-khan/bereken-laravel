<?php

namespace App\Http\Livewire\Compares;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Compares extends Component
{
    public $seo_data;
    public function render()
    {
        return view('livewire.compares.compares');
    }

    public function mount(){
        $seo_sql = 'select a.id,a.page_title,c.id as component_id,
        c.meta_title,
        c.meta_description,
        c.keywords,
        c.meta_robots,
        c.structured_data,
        c.meta_viewport,
        c.canonical_url from page_seos a
        left join page_seos_components b on (b.entity_id = a.id and b.field="page_seo" )
        left join components_shared_seos c on c.id = b.component_id
        where a.select_page_type="Compares"
        order by a.id ASC limit 1';

        $data = DB::select($seo_sql);

        $this->seo_data = $data;
    }
}
