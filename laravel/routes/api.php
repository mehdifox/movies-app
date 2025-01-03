<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FilmController;


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

Route::get('/createUser', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'login']);


// Route pour récupérer les films avec pagination et recherche
Route::middleware('auth:sanctum')->get('/films', [FilmController::class, 'index']);
Route::middleware('auth:sanctum')->get('/films/{id}', [FilmController::class, 'show']);
Route::middleware('auth:sanctum')->get('/films/{id}/edit', [FilmController::class, 'edit']);
Route::middleware('auth:sanctum')->put('/films/{id}', [FilmController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/films/{id}', [FilmController::class, 'destroy']);





// Route::middleware(['cors'])->group(function () {
//     Route::get('/fil', [FilmController::class, 'fil']);
// });