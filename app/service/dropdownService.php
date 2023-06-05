<?php

namespace App\service;

use Illuminate\Support\Facades\DB;

class dropdownService
{
    public function insertOrUpdate($cat_id,$id,$name,$url){

        for ($j = 0;$j < count($id); $j++){
            $data = [];
            if($id[$j] == 0){
                $data["cat_id"] = $cat_id;
                $data['name'] = $name[$j];
                $data['url'] = $url[$j];
                $data['display_order'] = "0";
                $insert = DB::table('dropdown_menus')->insert($data);
            }else{
                $data['name'] = $name[$j];
                $data['url'] = $url[$j];
                $data['display_order'] = "0";
                $update = DB::table('dropdown_menus')->where('id','=',$id[$j])->update($data);
            }
        }
    }
}
