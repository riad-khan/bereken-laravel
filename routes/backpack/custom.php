<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('tag', 'TagCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('social-link', 'SocialLinkCrudController');
    Route::crud('news', 'NewsCrudController');
    Route::crud('seo-data-table', 'SeoDataTableCrudController');
    Route::crud('faq', 'FaqCrudController');
    Route::crud('bmi', 'BmiCrudController');
    Route::get('/admin/bmi-faq',[\App\Http\Controllers\Admin\BmiCrudController::class,'bmiFaqPage']);
    Route::crud('vat', 'VatCrudController');
    Route::crud('knowledge-category', 'KnowledgeCategoryCrudController');
    Route::crud('knowledges', 'KnowledgesCrudController');
    Route::crud('strategics', 'StrategicsCrudController');
    Route::crud('accurates', 'AccuratesCrudController');
    Route::crud('home-ratings', 'HomeRatingsCrudController');
    Route::crud('home-reviews', 'HomeReviewsCrudController');
    Route::crud('contact', 'ContactCrudController');

    Route::crud('contact-info', 'ContactInfoCrudController');
    Route::crud('subscribe', 'SubscribeCrudController');
}); // this should be the absolute last line of this file