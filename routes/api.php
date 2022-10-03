<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/pdf/{id}', [\App\http\Controllers\BlocNoteController::class, 'pdf']);


Route::get('/', [\App\http\Controllers\BlocNoteController::class, 'index']);
Route::get('/show/{id}', [\App\http\Controllers\BlocNoteController::class, 'show']);
Route::get('/remove/BlocNote/{id}', [\App\http\Controllers\BlocNoteController::class, 'destroy']);
Route::get('/create', [\App\http\Controllers\BlocNoteController::class, 'create']);
Route::post('/save', [\App\http\Controllers\BlocNoteController::class, 'store']);

Route::get('show/remove/note/{id}', [\App\http\Controllers\noteController::class, 'destroy']);
Route::post('/save/note/{id}', [\App\http\Controllers\noteController::class, 'store'])->middleware('modifiable');;
Route::post('/send-email/{id}', [\App\http\Controllers\BlocNoteController::class, 'sendEmail']);



