<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [SearchProductsController::class,'index']);
Route::post('/add_to_cart',[CartController::class,'store']);
Route::get('/cart',[CartController::class,'index']);
Route::get('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'LogOut']);
Route::get('/createproduct',[ProductController::class,'create']);
Route::post('/storeProduct',[ProductController::class,'store']);
Route::get('/orders',[UserController::class,'orders']);
Route::get('/Products',[ProductController::class,'manage']);
Route::get('/product/{product}/edit',[ProductController::class,'edit']);
Route::put('/product/{Product}/update',[ProductController::class,'update']);

Route::post('/signIn',[UserController::class,'sign_in']);
Route::get('/checkout',[CheckoutController::class,'index']);
Route::post('/checkout',[CheckoutController::class,'create']);
Route::delete('/cart/{id}',[CartController::class,'destroy']);
Route::patch('cart/{id}',[CartController::class,'update']);
