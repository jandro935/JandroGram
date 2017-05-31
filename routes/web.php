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

//Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

// **** Login / register routes ****
Route::get('enter', function () {
    return view('auth.auth');
})->name('enter');

Route::post('login', [
    'as' => 'home.login',
    'uses' => 'Auth\LoginController@login'
]);

Route::post('register', [
    'as' => 'home.register',
    'uses' => 'Auth\RegisterController@register'
]);

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// **** Funcs routes ****
Route::get('upload', function () {
    return view('home.upload');
})->name('upload');
