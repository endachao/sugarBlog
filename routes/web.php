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

Auth::routes();

//Route::get('/backend', 'HomeController@index');

Route::get('{name}.html', function($name) {
    View::addExtension('html', 'php');
    return view(sprintf('modular.%s', $name));
});

Route::get('/general-setting', 'SettingController@index');

Route::get('/email-setting', 'HomeController@index');

Route::get('/nav-setting', 'HomeController@index');

Route::get('/link-setting', 'HomeController@index');

Route::group(['middleware' => 'auth', 'prefix' => 'backend'], function() {
    Route::get('/', 'HomeController@index');

    Route::resource('post', 'PostController');
});
