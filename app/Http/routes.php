<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware'=>'auth'],function() {
    Route::get('/', 'DashboardController@index');

    Route::get('train-trips', function () {
        return view('train');
    });
    Route::get('stop-fares', function () {
        return view('fares');
    });
    Route::get('timetable', function () {
        return view('timetable');
    });
    Route::get('payments-details', function () {
        return view('payments-details');
    });
    Route::get('cities', function () {
        return view('cities');
    });
    Route::get('booking', function () {
        return view('bookings');
    });
    Route::get('reports', function () {
        return view('reports');
    });
});

Route::get('login', 'DashboardController@login');
Route::post('login','DashboardController@post');
Route::get('logout','DashboardController@logout');