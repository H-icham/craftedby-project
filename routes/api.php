<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SpecialitieController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

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

//Api Routes
Route::post("register", [ApiController::class, "register"]);
Route::post("login", [ApiController::class, "login"]);

Route::group([
    "middleware" => ["auth:sanctum"]
],function (){
    Route::get("profile",[ApiController::class, "profile"]);
    Route::get("logout",[ApiController::class, "logout"]);
});


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

Route::get('customs', [CustomController::class, 'index']);
Route::get('/customs/{id}',[CustomController::class, 'show']);
Route::post('/customs', [CustomController::class, 'store']);
Route::put('/customs/{id}',[CustomController::class, 'update']);
Route::delete('/customs/{id}', [CustomController::class, 'destroy']);

Route::get('materials', [MaterialController::class, 'index']);
Route::get('/materials/{id}',[MaterialController::class, 'show']);
Route::post('/materials', [MaterialController::class, 'store']);
Route::put('/materials/{id}',[MaterialController::class, 'update']);
Route::delete('/materials/{id}', [MaterialController::class, 'destroy']);

Route::get('orders', [OrderController::class, 'index']);
Route::get('/orders/{id}',[OrderController::class, 'show']);
Route::post('/orders', [OrderController::class, 'store']);
Route::put('/orders/{id}',[OrderController::class, 'update']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);

Route::get('products', [ProductController::class, 'index']);
Route::get('/products/{id}',[ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}',[ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('reviews', [ReviewController::class, 'index']);
Route::get('/reviews/{id}',[ReviewController::class, 'show']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::put('/reviews/{id}',[ReviewController::class, 'update']);
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);

Route::get('roles', [RoleController::class, 'index']);
Route::get('/roles/{id}',[RoleController::class, 'show']);
Route::post('/roles', [RoleController::class, 'store']);
Route::put('/roles/{id}',[RoleController::class, 'update']);
Route::delete('/roles/{id}', [RoleController::class, 'destroy']);

Route::get('specialities', [SpecialitieController::class, 'index']);
Route::get('/specialities/{id}',[SpecialitieController::class, 'show']);
Route::post('/specialities', [SpecialitieController::class, 'store']);
Route::put('/specialities/{id}',[SpecialitieController::class, 'update']);
Route::delete('/specialities/{id}', [SpecialitieController::class, 'destroy']);

Route::get('themes', [ThemeController::class, 'index']);
Route::get('/themes/{id}',[ThemeController::class, 'show']);
Route::post('/themes', [ThemeController::class, 'store']);
Route::put('/themes/{id}',[ThemeController::class, 'update']);
Route::delete('/themes/{id}', [ThemeController::class, 'destroy']);

