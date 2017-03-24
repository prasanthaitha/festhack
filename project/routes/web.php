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


Route::get('/events','EventController@show');
Route::post ('/citysearch','SearchController@search');
Route::get('/reports/create','ReportController@create');
Route::post('/reports','ReportController@store');
Route::post('/rstatus','ReportController@search');

