<?php

use App\Http\Controllers\Frontend\InternetController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::group(['prefix' => 'admin',
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),], function()
{
    Route::get('/bmi/faq',[\App\Http\Controllers\Admin\BmiCrudController::class,'bmiFaqPage']);
    Route::get('/vat/faq',[\App\Http\Controllers\Admin\VatCrudController::class,'VatFaqPage']);
    Route::post('/create-faq',[\App\Http\Controllers\Admin\BmiCrudController::class,'createFAQ']);
    Route::get('/faq/bmi/delete/{id}',[\App\Http\Controllers\Admin\BmiCrudController::class,'deleteFaq']);
    Route::get('/faq/edit/{id}',[\App\Http\Controllers\Admin\BmiCrudController::class,'editFaq']);
    Route::put('/faq/update/{id}',[\App\Http\Controllers\Admin\BmiCrudController::class,'updateFaq']);


    Route::get('/faq/vat/delete/{id}',[\App\Http\Controllers\Admin\VatCrudController::class,'deleteFaq']);
  
  
    
    Route::get('/bmi/results', [\App\Http\Controllers\Admin\BmiCrudController::class,'createResultDetails']);
    Route::post('/bmi/store-result',[\App\Http\Controllers\Admin\BmiCrudController::class,'storeBmiResult']);
    Route::get('/bmi/create-results',[\App\Http\Controllers\Admin\BmiCrudController::class,'create_result']);
    Route::get('dropdown-settings',[\App\Http\Controllers\Admin\dropdownSettingsController::class,'edit']);
    Route::post('store-menus',[\App\Http\Controllers\Admin\dropdownSettingsController::class,'store']);
    Route::get('/populer-calculators',[\App\Http\Controllers\Admin\PopulerCalculator::class,'index']);
});

Route::get('/', \App\Http\Livewire\Home::class);
Route::get('/bmi-calculator', \App\Http\Livewire\Calculators\BMI\BmiCalculator::class);
Route::get('/bmi/calculator-results/{gender}/{height}/{bmi}', \App\Http\Livewire\Calculators\BMI\BmiResult::class)->name('bmi-result');
Route::get('/news',\App\Http\Livewire\News\News::class);
Route::get('/news/{slug}',\App\Http\Livewire\News\NewsDetails::class);

Route::post('/calculate-bmi',[\App\Http\Controllers\Frontend\Calculator\BMIController::class,'calculate']);
Route::get('/vat-calculator', \App\Http\Livewire\Calculators\VAT\Vats::class);
Route::post('/calculate-vat',[\App\Http\Controllers\Frontend\Calculator\VATCalculator::class,'calculateVat']);
Route::get('/vat/vat-result/{method}/{amount}/{vat}/{rate}',\App\Http\Livewire\Calculators\VAT\VatResult::class);
Route::get('/search-news',\App\Http\Livewire\Search\SearchNews::class);
Route::get('/news/{category}/{id}',\App\Http\Livewire\Filter\FilterNews::class);
Route::get('/knowledge',\App\Http\Livewire\Knowledge\Knowledge::class);
Route::get('/knowledge-details/{slug}',\App\Http\Livewire\Knowledge\KnowledgeDetails::class);
Route::get('/compares',\App\Http\Livewire\Compares\Compares::class);
Route::get('/calculations',\App\Http\Livewire\Calculations\Calculations::class);
Route::get('/knowledge-filter/{slug}',\App\Http\Livewire\Knowledge\KnowledgeFilter::class);
Route::get('/borrow-money',\App\Http\Livewire\BorrowMoney\BorrowMoney::class);
Route::get('/car-insurance',\App\Http\Livewire\CarInsurance\Carinsurance::class);
Route::get('/choose-coverage',\App\Http\Livewire\Coverage\ChooseCoverage::class);
Route::get('/your-car',\App\Http\Livewire\YourCar\YourCar::class);
Route::get('/car-insurance/your-details',\App\Http\Livewire\CarInsurance\YourDetails::class);
Route::get('/car-insurance/choose-insurance',\App\Http\Livewire\CarInsurance\ChooseInsurance::class);
Route::get('/car-insurance/choose-coverage',\App\Http\Livewire\CarInsurance\ChooseCoverage::class);
Route::get('/car-insurance/choose-coverage/compare-details',\App\Http\Livewire\CarInsurance\CompareDetails::class);
Route::get('/sim-only',\App\Http\Livewire\SimOnly\SimOnly::class);
Route::get('/sim-only/choose-package',\App\Http\Livewire\SimOnly\ChoosePackage::class);

Route::get('/contact-us',\App\Http\Livewire\Contact\ContactUs::class);
Route::get('/internet',\App\Http\Livewire\Internet\Internet::class);
Route::get('/internet/choose-package',\App\Http\Livewire\Internet\ChoosePackage::class);
Route::post('/send-contact-email',[\App\Http\Controllers\Frontend\ContactController::class,'sendEmail']);
Route::post('/search-news-submit',[\App\Http\Controllers\Frontend\SearchController::class,'searchNews']);
Route::post('/submit-subscribe',[SubscribeController::class,'create_subscribe']);
Route::post('/internet-package',[InternetController::class,'compare']);
Route::post('/sim-package',[InternetController::class,'simOnlyCompare']);
// Route::get('/contact',function(){
//     $data['name'] = 'riad';
//     Mail::to('riadkhan2367@gmail.com')->send(new ContactMail($data));
//     dd('sent email');
// });
Route::fallback(function(){
    return view('custom.404');
});
