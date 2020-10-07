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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/track', function () {
    return view('track');
});


Route::get('/contactus', 'ContactusController@contact');

Route::get('/contactussent', ['as'=>'contactus.store','uses'=>'ContactusController@contactUSPost']);
Route::get('/tracking', 'TrackingController@tracking')->name('tracking');