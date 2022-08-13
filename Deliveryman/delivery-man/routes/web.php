<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;
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

Route::get('/', function () {
    return view('delivery.pages.delivery.login');
});

Route::get('/login',[DeliveryController::class,'login'])->name('delivery.login');
Route::post('/login',[DeliveryController::class,'loginSubmit'])->name('delivery.login');
Route::get('/registration',[DeliveryController::class,'registration'])->name('delivery.registration');
Route::post('/registration',[DeliveryController::class,'registrationSubmit'])->name('delivery.registrationSubmit');
Route::get('/dashboard',[DeliveryController::class,'dashboard'])->middleware('Validuser')->name('delivery.dashboard');
Route::get('/signout',[DeliveryController::class,'signout'])->name('delivery.signout');
Route::get('/changepicture',[DeliveryController::class,'changepicture'])->middleware('Validuser')->name('delivery.changepicture');
Route::post('/changepicture',[DeliveryController::class,'changepictureSubmit'])->middleware('Validuser')->name('delivery.changepicture');
Route::get('/changepassword',[DeliveryController::class,'changepassword'])->middleware('Validuser')->name('delivery.changepassword');
Route::post('/changepassword',[DeliveryController::class,'changepasswordSubmit'])->middleware('Validuser')->name('delivery.changepassword');
Route::get('/changeinformation',[DeliveryController::class,'changeinformation'])->middleware('Validuser')->name('delivery.changeinformation');
Route::post('/changeinformation',[DeliveryController::class,'changeinformationSubmit'])->middleware('Validuser')->name('delivery.changeinformation');


Route::get('/noti',[DeliveryController::class,'noti'])->middleware('Validuser')->name('delivery.noti');
Route::get('/notifilter',[DeliveryController::class,'notifilter'])->middleware('Validuser')->name('delivery.notifilter');
Route::get('/history',[DeliveryController::class,'history'])->middleware('Validuser')->name('delivery.history');

Route::get('/customerdetails',[DeliveryController::class,'customerdetails'])->middleware('Validuser')->name('delivery.customerdetails');

Route::get('/homepage',[DeliveryController::class,'homepage'])->middleware('Validuser')->name('delivery.homepage');