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
Route::get('/tracks', 'ProfilerController@tracks')->name('tracklist');
Route::get('/index/file/download/{id}', 'ProfilerController@show')->name('downloadF');

Route::get('/about', 'ProfilerController@about');



Route::resource('profiler', 'ProfilerController');
// Route::get('/', function () {
// return view('welcome');
// });

Auth::routes();
// Route::get('/authorize', 'HomeController@index')->name('login');
