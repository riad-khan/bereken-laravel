<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchNews(Request $request)
    {
        $encrypt_search = Crypt::encrypt($request->search);
        return redirect()->to('/search-news?search=' . $encrypt_search . '');
    }

    public function searchCalculator(Request $request)
    {
        $calculatorsSql = 'select * from calculator_lists
         where calculator_name LIKE "%' . $request->keywords . '%" order by id DESC limit 10';

        if ($request->keywords) {
            $data = DB::select($calculatorsSql);

            foreach ($data as $row) {
                $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $row->calculator_name);
                //echo '<li><a href="/'.strtolower($slug).'">'.$row->calculator_name.'</a></li>';

                echo '<li>
                <a href="/'.strtolower($slug).'">
                <div  data-name="'.$row->calculator_name.'" class="flex p-3 rounded  hover:bg-gray-100">
                
                <label for="checkbox-item-11"
                class="w-full text-sm font-medium text-gray-900 cursor-pointer rounded">' . $row->calculator_name . '</label>
                
                </div>
            </a>
            </li>';
            }
        }
    }
}
