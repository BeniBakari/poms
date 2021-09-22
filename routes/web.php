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
    return redirect('request');
});

Route::get('addRegions', function () {
    return view('Admin.addRegion');
});
Route::get('manageUsers', function () {
    return view('Admin.manageUsers');
})->middleware('isAdmin');
Route::get('changepassword', function () {
    return view('User.changepassword');
});
Route::get('addUser','\App\Http\Controllers\UserController@getInfo');
Route::get('profile','\App\Http\Controllers\UserController@getProfile');
Route::get('deactivate','\App\Http\Controllers\UserController@deactivate')->middleware('isAdmin');
Route::get('activate','\App\Http\Controllers\UserController@activate')->middleware('isAdmin');
Route::get('users','\App\Http\Controllers\UserController@getUsers')->middleware('isAdmin');
Route::get('makeRequest','\App\Http\Controllers\RequestsController@getReqInfo');
Route::get('regions','\App\Http\Controllers\RegionsController@show');
Route::get('request','\App\Http\Controllers\RequestsController@myRequest');
Route::get('supervisor','\App\Http\Controllers\RequestsController@supervisorRequest')->middleware('isAdmin');
Route::get('districts','\App\Http\Controllers\District_councilController@show');
Route::get('roles','\App\Http\Controllers\RolesController@show');
Route::get('requestPdf','\App\Http\Controllers\PdfGeneratorController@requestPdf');

Route::post('reset','\App\Http\Controllers\ChangePassword@resetPassword')->middleware('isAdmin');
Route::post('register','\App\Http\Controllers\Auth\RegisterController@store')->middleware('isAdmin');
Route::post('cancel','\App\Http\Controllers\RequestsController@cancel');
Route::post('approve','\App\Http\Controllers\RequestsController@approve');
Route::post('disapprove','\App\Http\Controllers\RequestsController@approve');
Route::post('changepass','\App\Http\Controllers\ChangePassword@change');
Route::post('edit','\App\Http\Controllers\UserController@update');
Route::post('makeRequest','\App\Http\Controllers\RequestsController@store');
Route::post('addRegion','\App\Http\Controllers\RegionsController@store');
Route::post('addRole','\App\Http\Controllers\RolesController@store');
Route::post('addDivision','\App\Http\Controllers\DivisionsController@store');

Route::post('addDistrict','\App\Http\Controllers\District_councilController@store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
