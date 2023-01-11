<?php

use App\Models\Buvar;
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

Route::get("/manufacturers", function(){
    $manufacturers = Buvar::all();
    return response()->json($manufacturers);
});

Route::post("/manufacturers", function(Request $request){
    $manufacturer = new Buvar();
    $manufacturer -> fill($request->all());
    $manufacturer->save();
    return response()->json($manufacturer, 201);
});