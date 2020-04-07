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
Route::get('/', 'ProfilerController@index');
Route::get('/about', 'ProfilerController@about');
Route::get('/services', 'ProfilerController@services');


Route::resource('profiler', 'ProfilerController');
// Route::get('/', function () {
    // return view('welcome');
// });
