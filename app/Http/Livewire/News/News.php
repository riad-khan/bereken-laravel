<?php

namespace App\Http\Livewire\News;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class News extends Component
{
    use WithPagination;
    public $categories;
    public $search;
    public function render()

    {


        $more_news = DB::table(function ($query) {
            $query->selectRaw('*')
                ->from('news')
                ->where('hot_article', '=', 0)
                ->where('highlights', '=', 0)
                ->orderBy('id', 'desc')
                ->skip(4)
                ->take(10000);
        })->paginate(5);
        // $more_news = DB::table('news')->paginate(2);



        return view('livewire.news.news', ['moreNews' => $more_news]);
    }
    public function mount()
    {
        $categories = Category::all();

        $this->categories = $categories;
    }
    public function searchNews(Request $request)
    {

        //dump($request);
        //print_r($request);
        $encrypt_search = Crypt::encrypt($this->search);
        return redirect()->to('/search-news?search='.$encrypt_search.'');
        //echo '/search-news?search='.$encrypt_search.'';
        //die();
    }
}
