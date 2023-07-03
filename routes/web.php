<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\orderController;
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

Route::get('/',[CustomerController::class, 'index'])->name('customers.product');

// Route::resource('products',ProductController::class);
Route::get('/products/{type?}',[ProductController::class,'index'])->name('products.index')->middleware('is_admin');
Route::get('/info',[ProductController::class,'info'])->name('products.info')->middleware('is_admin');
Route::get('/create',[ProductController::class,'create'])->name('products.create')->middleware('is_admin');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store')->middleware('is_admin');
Route::get('/products/show/{product}',[ProductController::class,'show'])->name('products.show')->middleware('is_admin');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit')->middleware('is_admin');
Route::put('/products/{product}',[ProductController::class,'update'])->name('products.update')->middleware('is_admin');
Route::get('/products/verification/{product}',[ProductController::class,'verification'])->name('products.verification')->middleware('is_admin');
Route::get('/products/delete/{id}',[ProductController::class,'destroy'])->name('products.destroy')->middleware('is_admin');
// Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('products.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('customers',CustomerController::class)->middleware('auth');
Route::get('/about', function () {
    return view('customer.about');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('add/cart', [cartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::post('add/cart/{product}', [cartController::class, 'addProductToCart'])->name('add.cart')->middleware('auth');
Route::delete('remove/{product}/cart', [cartController::class, 'removeProductFromCart'])->name('remove.cart')->middleware('auth');

Route::put('/update/{product}/cart', [cartController::class,'updateProductOnCart'])->name('update.cart')->middleware('auth');

Route::post('/order', [cartController::class,'getOrder'])->name('getOrder')->middleware('auth');
Route::get('/order/delivered', [orderController::class,'Delivered'])->name('delivered')->middleware('auth');

//orders
Route::get('orders/index',[orderController::class,'index'])->name('orders.index');
Route::put('/updateD/{order}', [orderController::class,'updateDelivered'])->name('orders.updateD');
Route::put('/updateP/{order}', [orderController::class,'updatePaid'])->name('orders.updateP');
Route::delete('/delete/{order}', [orderController::class,'destroy'])->name('orders.destroy');