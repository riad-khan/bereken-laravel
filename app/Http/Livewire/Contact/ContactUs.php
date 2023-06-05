<?php

namespace App\Http\Livewire\Contact;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ContactUs extends Component
{
    public $seo_data;
    public function render()
    {
        return view('livewire.contact.contact-us');
    }

    public function mount(){
        $seo = DB::table('seo_data_tables')->where('page','=','contacts')
        ->orderByDesc('id')->limit(1)->get();
        $this->seo_data = $seo;
    }
}
