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

Route::get('/', [\App\Http\Controllers\WebController::class, 'index'])->name('index');
Route::get('/notas', [\App\Http\Controllers\WebController::class, 'posts'])->name('posts.index');
Route::get('/{slug}', [\App\Http\Controllers\WebController::class, 'post'])->name('posts.show');
