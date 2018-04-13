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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/makeRequest', 'ProfessorController@makeRequestForm');
Route::get('/sendRequest','ProfessorController@sendRequest')->name('sendRequest');
Route::get('/panelShow','ProfessorController@panelShow');
Route::get('/offersReceived','ProfessorController@offersReceived');

Route::get('/makeOffer', 'StudentController@makeOfferForm');
Route::get('/sendOffer','StudentController@sendOffer')->name('sendOffer');


Route::post('check', 'Controller@check')->name('check');
