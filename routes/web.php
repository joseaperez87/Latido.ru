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

/*if($this->app->environment('production')) {
    URL::forceScheme('https');
}*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('site/shutdown', function(){
    return Artisan::call('down');
});

Route::get('registration/success', function () {
    return view('auth.success');
});

Route::get('lang/{locale}', function ($locale) {
    Session::put('locale',$locale);

    return redirect()->back();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('register/{id}', ['uses' =>'Auth\RegisterController@showForm']);
Route::get('confirm/{code}', ['uses' =>'Auth\RegisterController@validateMail']);

Route::post('order/create', ['uses' =>'OrdersController@createForm']);
Route::get('order/create', ['uses' =>'OrdersController@createForm']);

$namespacePrefix = '\\'.config('voyager.controllers.namespace').'\\';
Route::get('login', ['uses' => $namespacePrefix.'VoyagerAuthController@login',     'as' => 'login']);
Route::post('login', ['uses' => $namespacePrefix.'VoyagerAuthController@postLogin', 'as' => 'postlogin']);

Route::get('logout', ['uses' => $namespacePrefix.'VoyagerController@logout',  'as' => 'logout']);

Route::get('/home', 'HomeController@index')->name('home');
