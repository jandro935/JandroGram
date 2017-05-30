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

Route::get('enter', function () {
    return view('auth.auth');
});

Route::post('login', [
    'as' => 'home.login',
    'uses' => 'Auth\LoginController@login'
]);

Route::post('register', [
    'as' => 'home.register',
    'uses' => 'Auth\RegisterController@register'
]);

Route::get('upload', [
    'as' => 'home.upload',
    'uses' => 'HomeController@upload'
]);
