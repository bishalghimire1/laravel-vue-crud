<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

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
Route::post('/create-user', [FlightController::class, 'create']
);
Route::get('/flight',[FlightController::class,'getFlight']);
Route::delete('/delete/{id}',[FlightController::class,'deleteFlight']);
Route::get('/getUser/{id}', [FlightController::class,'getUser']);
Route::put('/updateUser/{id}', [FlightController::class,'updateFlight']);

