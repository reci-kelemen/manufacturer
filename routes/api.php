<?php

use App\Models\Buvar;
use App\Http\Controllers\API\BuvarController;
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

// Route::get("/manufacturers", [BuvarController::class, 'index']);

// Route::post("/manufacturers", [BuvarController::class, 'store']);

// Route::get("/manufacturers/{id}", [BuvarController::class, 'show']);

// Route::put("/manufacturers/{id}", [BuvarController::class, 'update']);

// Route::patch("/manufacturers/{id}", [BuvarController::class, 'update']);

// Route::delete("/manufacturers/{id}", [BuvarController::class, 'destroy']);

Route::apiResource("/manufacturers", BuvarController::class);