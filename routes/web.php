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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/checkin', 'CheckInController@create');

    Route::post('/checkin/weight', 'WeightCheckInController@store');
    Route::get('/checkin/weight', function () {
        abort(405);
    });
    Route::get('/progress/weight', 'WeightCheckInController@index');

    Route::post('/checkin/calories', 'CalorieCheckInController@store');
    Route::get('/checkin/calories', function () {
        abort(405);
    });
});

Auth::routes();
