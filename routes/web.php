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

Route::get('{name}.html', function($name) {
    View::addExtension('html', 'php');
    return view(sprintf('modular.%s', $name));
});
// 后台路由写在这里
Route::group(['middleware' => 'auth', 'prefix' => 'backend'], function() {
    Route::get('/', 'HomeController@index');

    Route::resource('post', 'PostController');

    // 系统设置
    Route::get('email-setting', 'SettingController@getEmail');
    Route::post('email-setting', 'SettingController@updataEmailSetting');
    Route::resource('general-setting', 'SettingController');

    // Route::get('nav-setting', 'HomeController@index');
});
