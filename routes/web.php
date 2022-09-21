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


Route::get('/', [\App\http\Controllers\bloc_noteController::class, 'index']);
Route::get('/show/{id}', [\App\http\Controllers\bloc_noteController::class, 'show']);
Route::get('/create', [\App\http\Controllers\bloc_noteController::class, 'create']);
Route::post('/save', [\App\http\Controllers\bloc_noteController::class, 'store']);
