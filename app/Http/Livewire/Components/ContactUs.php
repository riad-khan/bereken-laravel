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
    public function mount(){
        $details = DB::table('contact_infos')->orderByDesc('id')->limit(1)->get();
        $this->details = $details;
    }
}
