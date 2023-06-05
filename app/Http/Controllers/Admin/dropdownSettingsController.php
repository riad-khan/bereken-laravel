<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\service\dropdownService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dropdownSettingsController extends Controller
{
    public function edit(){
       return view('Admin.dropdown_settings');
    }

    public function store(Request $request, dropdownService $dropdownService){
      

      

       $cat_id = $request->category_id;

       for($i = 0; $i < count($cat_id);$i++){
           $title = $request->title;
           $update_section_title = DB::table('dropdown_categories')->where('id','=',$cat_id[$i])->update([
               'name'=>$title[$i],
               'status'=>$request->status[$i]
           ]);
       }



       $section1 = $dropdownService->insertOrUpdate(1,$request->id,$request->menu_name1,$request->menu_link1);

       $section2 = $dropdownService->insertOrUpdate(2,$request->id2,$request->menu_name2,$request->menu_link2);
       $section3 = $dropdownService->insertOrUpdate(3,$request->id3,$request->menu_name3,$request->menu_link3);
       $section4 = $dropdownService->insertOrUpdate(4,$request->id4,$request->menu_name4,$request->menu_link4);
       $section5 = $dropdownService->insertOrUpdate(5,$request->id5,$request->menu_name5,$request->menu_link5);
      $section6 = $dropdownService->insertOrUpdate(6,$request->id6,$request->menu_name6,$request->menu_link6);


       \Alert::success(trans('backpack::crud.update_success'))->flash();
       return redirect('/admin/dropdown-settings');


    }
}
