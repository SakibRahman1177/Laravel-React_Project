<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;

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


Route::post('/login',[DeliveryController::class,'loginSubmit'])->name('delivery.login');
Route::get('/logout',[DeliveryController::class,'logout']);
Route::get('/allhistory',[DeliveryController::class,'allhistory'])->middleware('APIAuth');
Route::get('/allnotification',[DeliveryController::class,'allnotification'])->middleware('APIAuth');
Route::post('/changestatus',[DeliveryController::class,'changestatus'])->middleware('APIAuth');
Route::post('/searcharea',[DeliveryController::class,'searcharea'])->middleware('APIAuth');
Route::post('/information',[DeliveryController::class,'information'])->middleware('APIAuth');
Route::post('/changeinformation',[DeliveryController::class,'changeinformationSubmit'])->middleware('APIAuth');