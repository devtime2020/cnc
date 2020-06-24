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
    return view('home');
});



Route::get('/api/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');
//route user

Route::group(['middleware' => ['auth','checkrole:1']],function(){
	Route::get('/user','UserController@index');
	Route::post('/user/create','UserController@create');
	Route::get('/user/{id}/edit','UserController@edit');
	Route::post('/user/{id}/update','UserController@update');
	Route::get('/user/{id}/delete','UserController@delete');
	//route paramater
	Route::get('/paramh','ParamhController@index');
	Route::post('/paramh/create','ParamhController@create');
	Route::get('/{id}/paramd','ParamdController@index');
});

Route::group(['middleware' => ['auth','checkrole:1,2']],function(){
	Route::get('/dashboard','AdminController@dashboard');

});
	
