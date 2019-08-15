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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'TradesController@index');

Route::get('/charts', function() {
	return view('charts.index');
});
Route::get('/charts/data', 'ChartsController@getChartData');

Route::get('/alerts','AlertsController@index');
