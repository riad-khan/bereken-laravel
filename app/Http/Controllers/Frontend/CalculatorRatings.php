<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculatorRatings extends Controller
{
    public function calculator_ratings(Request $request)
    {
        //check if user already gives a rating
        $checkExist = DB::table('ratings')
            ->where('user_ip', '=', $request->user_ip)
            ->where('calculator_id', '=', $request->cal_id)
            ->first();

        if ($checkExist === null) {
            $insert = DB::table('ratings')->insert([
                'calculator_id' => $request->cal_id,
                'name' => $request->name,
                'email' => $request->email,
                'ratings' => $request->rating,
                'message' => $request->message,
                'user_ip' => $request->user_ip,
                'created_at' => Carbon::now(),
            ]);

            return response()->json('Ratings submitted successfully');
        } else {
            return response()->json('you already gave us a rating');
        }

        //return response()->json($checkExist);
    }
}
