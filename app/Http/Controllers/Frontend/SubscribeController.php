<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function create_subscribe(Request $request){

        $user_ip = $this->getUserIP();

        $find = DB::table('subscribes')->where('email','=',$request->email)->get();

        if(count($find)=== 0){
            $insert = DB::table('subscribes')->insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'user_ip'=>$user_ip,
               ]);
        
               return redirect()->back();
        }else{
            dump('exists');
        }

     

    }

    public function getUserIP() {
        if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
                $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
                return trim($addr[0]);
            } else {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        }
        else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
}
