<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternetController extends Controller
{
    public function compare(Request $request){
           return redirect()->to('/internet/choose-package?type='.$request->type.'&zip='.$request->zip.'&nr='.$request->hn.'');
    }
    public function simOnlyCompare(Request $request){
        return redirect()->to('/sim-only/choose-package?provider='.base64_encode($request->provider).'&number='.base64_encode($request->number).'&data='.base64_encode($request->data).'&min='.base64_encode($request->min)
        );
    }
}
