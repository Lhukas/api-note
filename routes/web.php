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




Route::get('/pdf/{id}', [\App\http\Controllers\bloc_noteController::class, 'pdf']);


Route::get('/', [\App\http\Controllers\bloc_noteController::class, 'index']);
Route::get('/show/{id}', [\App\http\Controllers\bloc_noteController::class, 'show']);
Route::get('/remove/bloc_note/{id}', [\App\http\Controllers\bloc_noteController::class, 'destroy']);
Route::get('/create', [\App\http\Controllers\bloc_noteController::class, 'create']);
Route::post('/save', [\App\http\Controllers\bloc_noteController::class, 'store']);

Route::get('show/remove/note/{id}', [\App\http\Controllers\noteController::class, 'destroy']);
Route::post('/save/note/{id}', [\App\http\Controllers\noteController::class, 'store'])->middleware('modifiable');;
Route::post('/send-email/{id}', [\App\http\Controllers\bloc_noteController::class, 'sendEmail']);
