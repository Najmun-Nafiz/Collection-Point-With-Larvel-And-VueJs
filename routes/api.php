<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace'=>'Back'], function(){

// Visitor ApiController...
Route::apiResource('visitor', 'VisitorController');
Route::get('search/visitor/{field}/{query}', 'VisitorController@search');


// Category ApiController...
Route::apiResource('category', 'CategoryController');

Route::get('catename/category', 'CategoryController@catename');
Route::get('category/active/{id}', 'CategoryController@active');
Route::get('category/unactive/{id}', 'CategoryController@unactive');
Route::get('search/category/{field}/{query}', 'CategoryController@search');

// Top-Category ApiController...
Route::apiResource('topcategory', 'TopCategoryController');
Route::get('topcategory/active/{id}', 'TopCategoryController@active');
Route::get('topcategory/unactive/{id}', 'TopCategoryController@unactive');
Route::get('search/topcategory/{field}/{query}', 'TopCategoryController@search');

// Top-Category ApiController...
Route::apiResource('location', 'LocationController');
Route::get('location/active/{id}', 'LocationController@active');
Route::get('location/unactive/{id}', 'LocationController@unactive');
Route::get('search/location/{field}/{query}', 'LocationController@search');

// Newsletter ApiController...
Route::apiResource('newsletter', 'NewsletterController');
Route::get('newsletter/active/{id}', 'NewsletterController@active');
Route::get('newsletter/unactive/{id}', 'NewsletterController@unactive');
Route::get('search/newsletter/{field}/{query}', 'NewsletterController@search');

// Slider ApiController...
Route::apiResource('slider', 'SliderController');
Route::get('slider/active/{id}', 'SliderController@active');
Route::get('slider/unactive/{id}', 'SliderController@unactive');
Route::get('search/slider/{field}/{query}', 'SliderController@search');

// Slider ApiController...
Route::apiResource('event', 'EventController');
Route::get('event/active/{id}', 'EventController@active');
Route::get('event/unactive/{id}', 'EventController@unactive');
Route::get('search/event/{field}/{query}', 'EventController@search');

});

Route::group(['namespace'=>'Front'], function(){

// CateOutput ApiController... api declared kora ace...
Route::apiResource('cate_output', 'CateOutputController');

});