<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\AddressController;
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



Route::get('/', [SearchProductsController::class,'index'])->name('index');


Route::group(['middleware'=>'auth','prefix'=>'admin'],function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/signUp', [UserController::class, 'signUp'])->name('admin.signup')->withoutMiddleware('auth');
    Route::get('/login', [UserController::class, 'login'])->name('login')->withoutMiddleware('auth');
    Route::post('/signIn', [UserController::class, 'signIn'])->name('admin.signIn');
    Route::post('/logout', [UserController::class, 'LogOut'])->name('logout');
    Route::get('/products', [AdminController::class, 'products'])->name('manage.products');
    Route::get('/costumers', [AdminController::class, 'costumer'])->name('manage.costumers');
    Route::get('/orders', [AdminController::class, 'orders'])->name('manage.orders');
    Route::get('/order/{id}', [AdminController::class, 'order_details'])->name('order.details');

    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
});


Route::get('/register',[CostumerController::class,'register'])->name('costumer.register');
Route::post('/signUp',[CostumerController::class,'signUp'])->name('costumer.signUp');
Route::get('/login',[CostumerController::class,'logIn'])->name('costumer.login');
Route::post('/signIn',[CostumerController::class,'signIn'])->name('costumer.signIn');
Route::post('/logout',[CostumerController::class])->name('costumer.logout');
Route::get('/orders',[CostumerController::class,'myOrders'])->name('myorders');
Route::get('/orders/{order_id}',[CostumerController::class,'order_details'])->name('myorder.details');
Route::get('/addresses',[AddressController::class,'myAddresses'])->name('myAddresses');
Route::get('/address/create',[AddressController::class,'create'])->name('address.create');
Route::post('/address/store',[AddressController::class,'store'])->name('addresses.store');
Route::get('/address/{address}',[AddressController::class,'edit']);
Route::put('/address/{address}/update',[AddressController::class,'update']);
Route::delete('/address/{address}/delete',[AddressController::class,'delete']);

Route::post('/add_to_cart',[CartController::class,'store']);
Route::get('/cart',[CartController::class,'index']);
Route::get('/checkout',[CheckoutController::class,'index']);
Route::post('/checkout',[CheckoutController::class,'create']);
Route::delete('/cart/{id}',[CartController::class,'destroy']);
Route::patch('cart/{id}',[CartController::class,'update']);
