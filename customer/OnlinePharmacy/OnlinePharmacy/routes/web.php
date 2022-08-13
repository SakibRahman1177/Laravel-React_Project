<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderdetailController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[pagesController::class, 'index'])->name('home');



Route::get('/signup',[CustomerController::class, 'signup'])->name('signup');
Route::post('/signup',[CustomerController::class, 'signupCreateSubmitted'])->name('signup');



Route::get('/login',[CustomerController::class, 'login'])->name('login');
Route::post('/login',[CustomerController::class, 'loginCreateSubmitted'])->name('login');

Route::get('/user/dash',[CustomerController::class, 'dashboard'])->name('dashboard')->middleware('ValidStudent');

Route::get('/user/profile',[CustomerController::class, 'profile'])->name('profile')->middleware('ValidStudent');
Route::get('/user/editprofile',[CustomerController::class, 'customerEdit'])->name('editprofile')->middleware('ValidStudent');
Route::post('/user/editprofile',[CustomerController::class, 'customerEditSubmitted'])->name('editprofile')->middleware('ValidStudent');



Route::get('/user/addprescription',[PrescriptionController::class, 'AddMedicine'])->name('addprescription')->middleware('ValidStudent');
Route::post('/user/addprescription',[PrescriptionController::class, 'ViewDetails'])->name('addprescription')->middleware('ValidStudent');
Route::get('/user/viewprescription',[PrescriptionController::class, 'ViewPrescription'])->name('viewprescription')->middleware('ValidStudent');
Route::get('/user/editprescription',[PrescriptionController::class, 'prescriptionEdit'])->name('editprescription')->middleware('ValidStudent');
Route::post('/user/editprescription',[PrescriptionController::class, 'prescriptionEditSubmitted'])->name('editprescription')->middleware('ValidStudent');

Route::get('product', [ProductController::class, 'productList'])->name('product');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


Route::get('/logout',[CustomerController::class,'logout'])->name('logout'); 