<?php

use App\Http\Controllers\DealController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\PortfolioController;
use App\Models\Asset;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('portfolios', PortfolioController::class);
Route::apiResource('assets', Asset::class);
Route::apiResource('exchanges', ExchangeController::class);
Route::apiResource('deals', DealController::class);
