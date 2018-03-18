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

Route::get('/', 'SiteController@index')->name('homeFront');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('homeAdmin');

    Route::get('/message', 'AdminController@messageList')->name('messageList');

    Route::any('/settings', 'AdminController@settings')->name('settings');
});
