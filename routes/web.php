<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GainerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products',ProductController::class);
Route::resource('gainers',GainerController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('customers',CustomerController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/cart',[cartController::class,'index'])->name('cart.index');
Route::post('/add/cart/{product}', [cartController::class,'addProductToCart'])->name('add.cart');
Route::delete('/remove/{product}/cart', [cartController::class,'removeProductFromCart'])->name('remove.cart');
Route::put('/update/{product}/cart', [cartController::class,'updateProductOnCart'])->name('update.cart');

Route::post('/order', [cartController::class,'getOrder'])->name('getOrder');
