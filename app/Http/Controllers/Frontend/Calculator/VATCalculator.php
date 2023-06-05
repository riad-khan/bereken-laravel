<?php

namespace App\Http\Controllers\Frontend\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class VATCalculator extends Controller
{
    public function calculateVat(Request $request){
        $randomKey = 21415;
          $vat_status = $request->vatStatus;
          $amount = $request->amount; 
          $vatRate = $request->vat_rate;

          if($vat_status == 'exclude'){
            $vatToPay = ($amount /100) * $vatRate ;
            $total_amount = $amount + $vatToPay;
            $data = base64_encode($amount);
       

       return redirect()->to('/vat/vat-result/'.base64_encode($vat_status).'/'.base64_encode($amount).'/'.base64_encode($vatToPay).'/'.base64_encode($vatRate).'');
          }else{
            $vat_divisor = 1 + ($vatRate / 100);
            $price_before_vat = $amount / $vat_divisor;
            $vat_amount = $amount - $price_before_vat;

         $final_amount = number_format($vat_amount,0,'.','');

           return redirect()->to('/vat/vat-result/'.base64_encode($vat_status).'/'.base64_encode($amount).'/'.base64_encode($final_amount).'/'.base64_encode($vatRate).'');
          }
    }
}
