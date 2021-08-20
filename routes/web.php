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

Route::get('/', function () {
    return view('welcome');
})->name("home");



Route::group(['middleware' => ['auth']],function(){
    Route::get('customer', 'CustomerController@index')->name("customers");
});
Route::post('submit_question', 'CustomerController@submit_question')->name('submit_question');
Route::get('customer/login', 'CustomerController@login')->name("customer_login");
Route::get('customer/register', 'CustomerController@register')->name("customer_register");

Route::group(['middleware' => ['provider_auth']],function(){
    Route::get('provider', 'ProviderController@index')->name("providers");
});
Route::get('provider/login', 'ProviderController@login')->name("provider_login");
Route::get('provider/register', 'ProviderController@register')->name("provider_register");
Route::get('logout', 'HomeController@logout')->name("logout");

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
 