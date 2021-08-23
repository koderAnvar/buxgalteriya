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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bux', 'App\Http\Controllers\BuxController@index');
Route::get('/bux/create','App\Http\Controllers\BuxController@create');
// Route::get('/bux/{id}','App\Http\Controllers\BuxController@show');
Route::post('/bux', 'App\Http\Controllers\BuxController@store');
Route::delete('/bux/{id}', 'App\Http\Controllers\BuxController@destroy');

// Route::get('/bux', 'BuxController@index')->middleware('auth');
// Route::get('/bux/{id}', 'BuxController@show')->middleware('auth');
// Route::delete('/bux/{id}', 'BuxController@destroy')->middleware('auth');


// Auth::routes([
//     'register' => false,
//   ]);
  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
