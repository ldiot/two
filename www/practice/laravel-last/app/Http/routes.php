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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::any('/', ['uses' => 'StudentController@searchOne']);
Route::any('timetable', ['uses' => 'StudentController@timetable']);
Route::any('info', ['uses' => 'StudentController@info']);

//Route::get('timetable/{number1}', function ($number1) {
//    return 111;
//});

















