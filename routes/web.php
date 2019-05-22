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
    Route::get('/checkin', 'WeightCheckInController@create');
    Route::post('/checkin/weight', 'WeightCheckInController@store');
    Route::get('/checkin/weight', function () {
        abort(405, 'Not allowed');
    });
    Route::get('/progress/weight', 'WeightCheckInController@index');

    Route::get('/home', 'HomeController@index')->name('home');
});

Route::post('/checkin/calories', function (){
    $checkInData = request()->validate([
        'calories' => 'required'
    ]);

    App\CalorieCheckIn::create($checkInData);

    return redirect('/checkin');
});

Auth::routes();
