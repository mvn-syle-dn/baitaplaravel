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
//Dang nhap
Route::get('/login', 'UserController@showlogin')->name('showLogin');
Route::post('/login', 'UserController@login')->name('Login');
Route::get('/logout', 'UserController@logout')->name('logoutUser');

//User
Route::get('/admin', 'UserController@showAdmin')->name('adminPage');
Route::get('/user/create', 'UserController@create')->name('userCreate');
Route::post('/user/store', 'UserController@store')->name('userStore');
Route::get('/user/show', 'UserController@show')->name('showUser');
Route::get('/user/edit/{id}', 'UserController@edit')->name('userEdit');
Route::post('/user/update/{id}', 'UserController@update')->name('userUpdate');
Route::get('/user/delete/{id}', 'UserController@delete')->name('userDelete');

//middleware
route::group(['middleware'=>['IsAdmin']],function(){
    // Route::get('/user/create', 'UserController@create')->name('userCreate');
    // Route::get('/user/create', 'UserController@create')->name('userCreate');
    // Route::post('/user/store', 'UserController@store')->name('userStore');
    // Route::get('/user/show', 'UserController@show')->name('showUser');
    // Route::get('/user/edit/{id}', 'UserController@edit')->name('userEdit');
    // Route::post('/user/update/{id}', 'UserController@update')->name('userUpdate');
    // Route::get('/user/delete/{id}', 'UserController@delete')->name('userDelete');
});