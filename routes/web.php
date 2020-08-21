<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WebController@index')->name('index');
Route::get('/posts', 'WebController@posts')->name('posts.index');
Route::get('/posts/{slug}', 'WebController@post')->name('posts.show');
Route::get('/{slug}', 'WebController@page')->name('pages.show');
