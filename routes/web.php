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
    return view('login');
});
Route::get('/register','StaticPagesController@register')->name('register');
Route::post('/register','StaticPagesController@create')->name('create');
Route::post('/','StaticPagesController@login')->name('login');
Route::get('/download','StaticPagesController@download')->name('download');
Route::get('/index','StaticPagesController@index')->name('index');
Route::get('/charts','StaticPagesController@charts')->name('charts');
