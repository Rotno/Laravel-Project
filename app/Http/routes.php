<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', 'StudentController@index')->name('home');
Route::get('/', 'StudentController@index')->name('home');
Route::get('create','StudentController@create')->name('create');
Route::post('create','StudentController@store')->name('store');
Route::get('edit/{id}','StudentController@edit')->name('edit');
Route::post('update/{id}','StudentController@update')->name('update');
Route::delete('delete/{id}', 'StudentController@delete')->name('delete');
Route::auth();

Route::get ('logout',function(){
 Auth::logout ();
 return Redirect::to('login');
});