<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\TopController@index');
Route::get('/search-single/numbers3', 'App\Http\Controllers\SearchController@single');
Route::get('/search-double/numbers3', 'App\Http\Controllers\SearchController@double');
Route::get('/search-triple/numbers3', 'App\Http\Controllers\NumbersController@singleNumbers3');
// Route::get('/search-single/numbers4', 'App\Http\Controllers\NumbersController@singleNumbers4');
// Route::get('/search-double/numbers4', 'App\Http\Controllers\NumbersController@singleNumbers4');
// Route::get('/search-triple/numbers4', 'App\Http\Controllers\NumbersController@singleNumbers4');


// Route::get('/search/numbers3', 'App\Http\Controllers\SearchController@numbers3');
// Route::get('/search/numbers4', 'App\Http\Controllers\SearchController@numbers4');
// Route::get('/pattern/numbers3', 'App\Http\Controllers\PatternController@index');
// Route::get('/pattern/numbers4', 'App\Http\Controllers\NumbersController@index');
// Route::get('/numbers4', 'App\Http\Controllers\NumbersController@index');

// Route::get('/numbers4/search-pattern/', 'App\Http\Controllers\NumbersController@index');
// Route::get('/count', 'App\Http\Controllers\CountController@index');

// Route::get('/backtest', 'App\Http\Controllers\BacktestController@index');

// Route::get('/statistics', 'App\Http\Controllers\StatisticsController@index');
