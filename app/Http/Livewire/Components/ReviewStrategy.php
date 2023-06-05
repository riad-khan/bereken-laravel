<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ReviewStrategy extends Component
{
    public $strategies;
    public $reviews;
    public function render()
    {
        return view('livewire.components.review-strategy');
    }

    public function mount(){
        $data = DB::table('accurates')->get();
        $this->strategies = $data;

        $reviews = DB::table('home_reviews')->orderByDesc('id')->limit(1)->get();
        $this->reviews = $reviews;
    }
}
