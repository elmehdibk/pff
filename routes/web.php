<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\CustomerController;
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

// Route::resource('products',ProductController::class);
Route::get('/products/{type?}',[ProductController::class,'index'])->name('products.index');
Route::get('/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('/products/show/{product}',[ProductController::class,'show'])->name('products.show');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{product}',[ProductController::class,'update'])->name('products.update');
Route::get('/products/verification/{product}',[ProductController::class,'verification'])->name('products.verification');
Route::get('/products/delete/{id}',[ProductController::class,'destroy'])->name('products.destroy');
// Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('products.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('customers',CustomerController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/cart',[cartController::class,'index'])->name('cart.index');
Route::post('/add/cart/{product}', [cartController::class,'addProductToCart'])->name('add.cart');
Route::delete('/remove/{product}/cart', [cartController::class,'removeProductFromCart'])->name('remove.cart');
Route::put('/update/{product}/cart', [cartController::class,'updateProductOnCart'])->name('update.cart');

Route::post('/order', [cartController::class,'getOrder'])->name('getOrder');
