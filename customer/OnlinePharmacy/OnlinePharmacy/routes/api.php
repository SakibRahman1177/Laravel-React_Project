<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PrescriptionController;

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


Route::post('/customer/login',[CustomerController::class, 'login']);
Route::get('/customer/allproduct',[ProductController::class, 'productList']);

Route::post('/customer/information',[CustomerController::class,'information']);

Route::post('/customer/changeinformation',[CustomerController::class,'changeinformationSubmit']); 

Route::post('/customer/addprescription',[PrescriptionController::class,'addprescription']); 

Route::post('/customer/product',[ProductController::class,'product']); 
Route::post('/customer/addtocart',[ProductController::class,'addtocart']); 
Route::get('/customer/allcart',[ProductController::class,'allcart']); 
Route::post('/customer/removecart',[ProductController::class,'removecart']); 
Route::get('/customer/confirmorder',[ProductController::class,'confirmorder']); 
Route::get('/customer/orderdetails',[ProductController::class,'orderdetails']); 



