<?php

use App\Http\Controllers\DealController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\PortfolioController;
use App\Models\Asset;
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

Route::apiResource('portfolios', PortfolioController::class);
Route::apiResource('assets', Asset::class);
Route::apiResource('exchanges', ExchangeController::class);
Route::apiResource('deals', DealController::class);
