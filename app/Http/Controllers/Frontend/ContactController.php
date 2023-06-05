<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function sendEmail(Request $request){

        $validate = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'email'=>'required|email',
            'name'=>'required',
            'company'=>'required',
            'question'=>'required',
        ]);
       $mailData = [
             "salutation"=>$request->salutation,
            "name"=>$request->name,
            "email"=>$request->email,
            "company"=>$request->company,
            "question"=>$request->question
       ];
       $store = DB::table('contacts')->insert($mailData);
       Mail::to($mailData['email'])->send(new ContactMail($mailData));
       return redirect()->back();
       // Alert::success('Success Title', 'Success Message');
       
    }
}
