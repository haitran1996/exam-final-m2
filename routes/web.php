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

use Illuminate\Support\Facades\Route;

Route::middleware('web')->prefix('/')->group(function () {
    Route::get('/', 'ContactController@index')->name('home');
    Route::get('/create', 'ContactController@create')->name('contact.create');
    Route::get('/{id}/delete', 'ContactController@delete')->name('contact.delete');
    Route::post('/store', 'ContactController@store')->name('contact.store');
    Route::post('/search', 'ContactController@search')->name('contact.search');

});
