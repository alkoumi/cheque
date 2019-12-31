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

use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/{country}/{chequeTo}/{total}', 'HomeController@index');
    Route::post('/printCheque', 'HomeController@printCheque');
});

Route::get("sms",'HomeController@sms');
