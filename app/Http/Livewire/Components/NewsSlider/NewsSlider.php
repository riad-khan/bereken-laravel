<?php

namespace App\Http\Livewire\Components\NewsSlider;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewsSlider extends Component
{
    public $lattest_news;
    public function render()
    {
        return view('livewire.components.news-slider.news-slider');
    }
    public function mount(){
        $data = DB::table('news')->orderByDesc('id')->limit(10)->get();
        $this->lattest_news = $data;
    }
}
