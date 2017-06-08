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

// **** Upload routes ****

Route::get('upload', [
    'as' => 'upload.index',
    'uses' => 'UploadController@index'
])->middleware('auth');

Route::post('upload', 'UploadController@upload')
    ->name('upload.post')
    ->middleware('auth');


// **** Proof ****

Route::get('proof', 'HomeController@proof');
