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
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/booking','BookingController@index');
    Route::get('/booking/index','BookingController@index');
    Route::get('/booking/new','BookingController@new');
    Route::post('/booking/store/','BookingController@store');
    Route::get('/booking/show/{id}','BookingController@show');
    Route::get('/booking/delete/{id}','BookingController@delete');
    Route::post('/booking/update/','BookingController@update');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
