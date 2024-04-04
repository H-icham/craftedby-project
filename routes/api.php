<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('artists', [ArtistController::class, 'index']);
Route::get('/artists/{id}',[ArtistController::class, 'show']);
Route::post('/artists', [ArtistController::class, 'store']);
Route::put('/artists/{id}',[ArtistController::class, 'update']);
Route::delete('/artists/{id}', [ArtistController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}',[UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

