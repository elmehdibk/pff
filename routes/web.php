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

Route::resource('products',ProductController::class);
Route::resource('gainers',GainerController::class);
Route::resource('wheys',wheyController::class);
Route::resource('bcaas',bcaaController::class);
Route::resource('eaas',eaaController::class);
Route::resource('creatines',creatineController::class);
Route::resource('proteinBars',proteinBarController::class);
Route::resource('preWorkouts',preWorkoutController::class);
Route::resource('shakers',shakerController::class);
Route::resource('others',otherController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('customers',CustomerController::class);