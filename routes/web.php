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
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/wait', 'ProfessorController@wait');

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index');

    Route::get('/makeRequest', 'ProfessorController@makeRequestForm');
    Route::post('/sendRequest','ProfessorController@sendRequest')->name('sendRequest');
    Route::get('/offersReceived','ProfessorController@offersReceived');

    Route::get('/requestsReceived','StudentController@requestsReceived');
    Route::get('/makeOffer', 'StudentController@makeOfferForm');
    Route::post('/sendOffer','StudentController@sendOffer')->name('sendOffer');
});



