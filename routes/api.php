<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PageController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', [PageController::class, 'index']);
Route::get('/tecnologie', [PageController::class, 'technologies']);
Route::get('/tipi', [PageController::class, 'types']);
Route::get('/dettagli-post/{slug}', [PageController::class, 'projectDetails']);
Route::get('/progetti-per-tipo/{slug}', [PageController::class, 'ProjectsByType']);
Route::get('/progetti-per-tecnologia/{slug}', [PageController::class, 'ProjectsByTechnologies']);
