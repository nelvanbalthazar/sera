<?php

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

Route::get('/form', 'FormController@index')->name('form.index');
Route::post('/post', 'FormController@store')->name('form.store');
Route::get('/success', 'FormController@success')->name('form.success');
Route::get('/backend', 'BackendController@index')->name('backend.index');
Route::get('/applicant/{id}', 'BackendController@show')->name('backend.show');
//Route::get('/pdf/{id}', 'BackendController@pdf')->name('backend.pdf');
