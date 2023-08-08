<?php

use App\Http\Controllers\Api\Admin;
use App\Http\Controllers\Api\Admin\LoginController;
use App\Http\Controllers\Api\TourController;
use App\Http\Controllers\Api\TravelController;
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

Route::prefix('v1')->group(function () {

    Route::get('/travels', [TravelController::class, 'index']);
    Route::get('/travels/{travel:slug}/tours', [TourController::class, 'index']);


    Route::prefix('admin')->middleware(['auth:sanctum','role:admin'])->group(function () {

        Route::post('/travels', [Admin\TravelController::class, 'store']);
        Route::post('/travels/{travel}/tours', [Admin\TourController::class, 'store']);
    });

    Route::post('admin/login', LoginController::class);
});
