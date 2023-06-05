<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/featured',[\App\Http\Controllers\Admin\BmiCrudController::class,'featured_Calculator']);
Route::get('/getFeatured/{id}',[\App\Http\Controllers\Admin\BmiCrudController::class,'getFeaturedList']);
Route::post('/updateOrder',[\App\Http\Controllers\Admin\BmiCrudController::class,'updateOrder']);
Route::get('/checkBoxCalculator/{id}',[\App\Http\Controllers\Admin\BmiCrudController::class,'checkBoxList']);
Route::get('/deleteFeatured/{id}',[\App\Http\Controllers\Admin\BmiCrudController::class,'deleteFeatured']);
Route::get('/getFaq',[\App\Http\Controllers\Admin\BmiCrudController::class,'getBmi']);
Route::get('/getFaqVat',[\App\Http\Controllers\Admin\VatCrudController::class,'getVatFaq']);
Route::get('/getBmiResult',[\App\Http\Controllers\Admin\BmiCrudController::class,'getResultsData']);
Route::post('/search-calculator',[\App\Http\Controllers\Frontend\SearchController::class,'searchCalculator']);
Route::post('/calculator-ratings',[\App\Http\Controllers\Frontend\CalculatorRatings::class,'calculator_ratings']);
Route::get('/calculator-list',[\App\Http\Controllers\Admin\PopulerCalculator::class,'calculator_list']);
Route::post('/populerCalculator-submit',[\App\Http\Controllers\Admin\PopulerCalculator::class,'insert_populer']);
Route::get('/populer-list',[\App\Http\Controllers\Admin\PopulerCalculator::class,'get_populer_calculators']);
Route::get('/delete/populer-list/{id}',[\App\Http\Controllers\Admin\PopulerCalculator::class,'delete_populer']);
Route::post('/update-order',[\App\Http\Controllers\Admin\PopulerCalculator::class,'updateOrder']);
Route::post('/update-status',[\App\Http\Controllers\Admin\PopulerCalculator::class,'updateStatus']);
Route::get('/get-presets',[\App\Http\Controllers\Admin\NewsCrudController::class,'get_presets']);