<?php

namespace App\service;
use Illuminate\Http\Request;

class imageService
{
    public function insertImage (Request $request,$path){
        $image = $request->file('image');
        $randomName_gen = hexdec(uniqid());
        $image_extesion = strtolower($image->getClientOriginalExtension());
        $image_name = $randomName_gen . '.' . $image_extesion;
        $upload_dir = 'images/'.$path.'/';
        $final_name = $upload_dir . $image_name;
        $image->move($upload_dir, $image_name);

        return $final_name;


    }
    public function bannerImage (Request $request,$path){
        $image = $request->file('banner_image');
        $randomName_gen = hexdec(uniqid());
        $image_extesion = strtolower($image->getClientOriginalExtension());
        $image_name = $randomName_gen . '.' . $image_extesion;
        $upload_dir = 'images/'.$path.'/';
        $final_name = $upload_dir . $image_name;
        $image->move($upload_dir, $image_name);

        return $final_name;


    }
}
