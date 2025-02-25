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

Route::get('/logo', function () {
    return view('logo');
});
Route::get('/homes', function () {
    return view('homes');
});
Route::get('/search', function () {
    return view('search');
});
Auth::routes();


Route::match(['get', 'post'], '/botman', 'BotManController@handle');

Route::get('/home', 'HomeController@index')->name('home');
