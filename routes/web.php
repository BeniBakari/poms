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

Route::get('editUser', function () {
    return view('User.editUser');
});
Route::get('Myprofile', function () {
    return view('user.profile');
});
Route::get('addUser','\App\Http\Controllers\UserController@getInfo');
Route::get('profile','\App\Http\Controllers\UserController@getProfile');
Route::get('deactivate','\App\Http\Controllers\UserController@deactivate');
Route::get('users','\App\Http\Controllers\UserController@getUsers');
Route::get('request','\App\Http\Controllers\RequestController@getReqInfo');
Route::get('districts','\App\Http\Controllers\RegionsController@show');

Route::post('edit','\App\Http\Controllers\UserController@update');
Route::post('addRegion','\App\Http\Controllers\RegionsController@store');
Route::post('addRole','\App\Http\Controllers\RolesController@store');
Route::post('addDivision','\App\Http\Controllers\DivisionsController@store');
Route::post('makeRequest','\App\Http\Controllers\RequestController@makeRequest');
Route::post('addDistrict','\App\Http\Controllers\District_councilController@store');


Route::get('role', function () {
    return view('Admin.addDivision');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
