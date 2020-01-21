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
//PAGE DE DEMO
Route::get('/demo', function () {
    return view('demo');
});



Route::get('/', function () {
    return view('landing-page');
});

Route::get('/activites', function () {
    return view('activites');
});

Route::get('/manutention', function () {
    return view('manutention');
});

Route::get('/douanes', function () {
    return view('douanes');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/logistique', function () {
    return view('logistique');
});

Route::get('/default', function () {
    return view('default');
});

Route::get('/default2', function () {
    return view('default2');
});

Route::get('/profil', function () {
    return view('profile-page');
});

Route::get('/login', function () {
    return view('login-page');
});

Route::get('/login2', function () {
    return view('login-page2');
});


Route::resource('user', 'UserController');
Route::resource('candidature', 'CandidatureController');
Route::get('/candidatures/store', 'CandidatureController@store')->name('candidatures.store');
//Route::post('candidature', 'CandidatureController@store');
Route::resource('information', 'InformationController');
Route::resource('application', 'ApplicationController');