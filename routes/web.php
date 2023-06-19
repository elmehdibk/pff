<?php

use App\Http\Controllers\bcaaController;
use App\Http\Controllers\creatineController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\eaaController;
use App\Http\Controllers\GainerController;
use App\Http\Controllers\otherController;
use App\Http\Controllers\preWorkoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\proteinBarController;
use App\Http\Controllers\shakerController;
use App\Http\Controllers\wheyController;
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

Route::get('add-to-cart/{id}', [CustomerController::class, 'addToCart'])->name('add-to-cart');
