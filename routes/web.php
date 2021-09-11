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
    return view('layouts/navibar');
});

Route::get('addUser','\App\Http\Controllers\UserController@getInfo');
Route::get('profile','\App\Http\Controllers\UserController@getProfile');
Route::get('deactivate','\App\Http\Controllers\UserController@deactivate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
