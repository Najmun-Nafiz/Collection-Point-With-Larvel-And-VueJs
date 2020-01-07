<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes(['verify' => true]);

Route::get('/', 'WelcomeController@index')->name('back');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/profile/{id}', 'HomeController@profile_change')->name('profile.change');
Route::post('/profile/{id}', 'HomeController@profile_update')->name('profile.update');




Route::group(['prefix'=>'admin','namespace'=>'Admin','as' => 'admin.'], function(){

  Route::get('/dashboard', 'AdminController@index')->name('dashboard');
  
  Route::get('register', 'Auth\AdminRegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'Auth\AdminRegisterController@register');

  Route::get('login', 'Auth\AdminLoginController@login')->name('login');
  Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('login');
  Route::post('logout', 'Auth\AdminLoginController@logout')->name('logout');

   Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('password.request');
   Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('password.email');

   Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('password.reset');
   Route::post('password/reset', 'Auth\AdminResetPasswordController@reset')->name('password.update');

    // Route::get('email/verify', 'Auth\AdminVerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}', 'Auth\AdminVerificationController@verify')->name('verification.verify');
    // Route::get('email/resend', 'Auth\AdminVerificationController@resend')->name('verification.resend');


    Route::get('{path}','AdminController@index')->where( 'path', '([A-z]+)?' );

});

Route::get('{path}','WelcomeController@index')->where( 'path', '([A-z]+)?' );