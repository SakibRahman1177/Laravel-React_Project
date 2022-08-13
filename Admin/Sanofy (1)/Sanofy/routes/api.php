<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

// Route::get('/deliverymaninfo/info',[DeliveryController::class,'UserAPIInfo']);
// Route::post('/deliverymaninfo/info',[DeliveryController::class,'UserAPIPost']);

// Route::get('/customerinfo/info',[CustomerController::class,'UserAPIInfo']);
// Route::post('/customerinfo/info',[CustomerController::class,'UserAPIPost']);
// Route::post('/edit-customer/{id}',[CustomerController::class,'edit']);

// Route::get('/customer/list',[CustomerController::class,'APICustomerList']);
// // Route::post('/employee/add',[AdminController::class,'APIemployeeAdd']);
// Route::get('/customer/{name}',[CustomerController::class,'APIcustomerDetails']);

Route::post('/admin/login',[LoginController::class,'login']);

Route::post('/admin/information',[AdminController::class,'information']);
Route::post('/admin/changeinformation',[AdminController::class,'changeinformation']);

Route::get('/admin/allcustomer',[CustomerController::class,'allcustomer']);
Route::post('/admin/customerinformation',[CustomerController::class,'customerinformation']);
Route::post('/admin/customerchangeinformation',[CustomerController::class,'customerchangeinformation']);
Route::post('/admin/changestatuscustomer',[CustomerController::class,'changestatuscustomer']);

Route::post('/admin/addcomment',[AdminController::class,'addcomment']);
Route::get('/admin/allcomment',[AdminController::class,'allcomment']);
Route::get('/admin/allorder',[AdminController::class,'allorder']);

Route::post('/admin/searchcustomer',[CustomerController::class,'searchcustomer']);

Route::post('/admin/addadmin',[AdminController::class,'addadmin']);