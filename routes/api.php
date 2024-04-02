<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProductController;
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
Route::post('/artists/post', [ArtistController::class, 'store']);
Route::put('/artists/update/{id}',[ArtistController::class, 'update']);
Route::delete('/artists/delete/{id}', [ArtistController::class, 'destroy']);

