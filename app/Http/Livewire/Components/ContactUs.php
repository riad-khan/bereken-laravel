<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ContactUs extends Component
{
    public $details;
    public function render()
    {
        return view('livewire.components.contact-us');
    }
    public function mount()
    {
        $details = DB::select('select 
        a.button_text,
        a.contact_page_title,
        a.contact_section_content,
        c.url
        
        from contact_us_settings a
        left join files_related_morphs b on (b.related_id = a.id and b.field = "contact_image")
        left join files c on c.id = b.file_id
        order by a.id ASC limit 1');
        
        $this->details = $details;
    }
}
