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
    return view('default');
});

Route::get('/landing', function () {
    return view('landing-page');
});

Route::get('/profil', function () {
    return view('profile-page');
});


