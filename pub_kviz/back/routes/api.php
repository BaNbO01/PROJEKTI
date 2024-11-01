<?php

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\AuthController;

//prijava, odjava, registracija na sistem
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


use App\Http\Controllers\SezonaController;
use App\Http\Controllers\DogadjajController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\ClanController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('sezone', [SezonaController::class, 'index']);
    Route::get('sezone/{id}', [SezonaController::class, 'show']);
    Route::post('sezone', [SezonaController::class, 'store']);
    Route::put('sezone/{id}', [SezonaController::class, 'update']);
    Route::delete('sezone/{id}', [SezonaController::class, 'destroy']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('dogadjaji', [DogadjajController::class, 'index']);
    Route::get('dogadjaji/{id}', [DogadjajController::class, 'show']);
    Route::post('dogadjaji', [DogadjajController::class, 'store']);
    Route::put('dogadjaji/{id}', [DogadjajController::class, 'update']);
    Route::delete('dogadjaji/{id}', [DogadjajController::class, 'destroy']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('timovi', [TimController::class, 'index']);
    Route::get('timovi/{id}', [TimController::class, 'show']);
    Route::post('timovi', [TimController::class, 'store']);
    Route::put('timovi/{id}', [TimController::class, 'update']);
    Route::delete('timovi/{id}', [TimController::class, 'destroy']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('clanovi', [ClanController::class, 'index']);
    Route::get('clanovi/{id}', [ClanController::class, 'show']);
    Route::post('clanovi', [ClanController::class, 'store']);
    Route::put('clanovi/{id}', [ClanController::class, 'update']);
    Route::delete('clanovi/{id}', [ClanController::class, 'destroy']);
});

