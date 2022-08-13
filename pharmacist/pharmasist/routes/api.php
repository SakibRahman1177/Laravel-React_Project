<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\PharmacyController;

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



Route::post('/signin',[LoginAPIController::class,'APIlogin']); 
Route::post('/signup',[LoginAPIController::class,'APIReg']);
Route::post('/logout',[LoginAPIController::class,'logout']); 

Route::get('/pharmacist/allproduct',[ProductController::class,'allproduct']); 
Route::get('/pharmacist/requestproduct',[ProductController::class,'requestproduct']); 
Route::get('/pharmacist/allprescription',[PrescriptionController::class,'allprescription']); 

Route::post('/pharmacist/addmedicine',[ProductController::class,'addmedicine']); 

Route::post('/pharmacist/changestatus',[ProductController::class,'changestatus']); 

Route::post('/pharmacist/changeinformation',[PharmacyController::class,'changeinformationSubmit']); 

Route::post('/pharmacist/information',[PharmacyController::class,'information']);







