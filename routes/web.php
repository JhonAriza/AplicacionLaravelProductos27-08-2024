<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaymentController;
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

Route::get('/', [ProductController::class, 'index']);

Route::get('show-product/{id}', [ProductController::class, 'show']);

Route::post('storeProduct', [ProductController::class, 'store']);

Route::post('storeProductDashboard', [ProductController::class, 'storeProduct']);
// este ruta  es una clase auxiliar que ayuda  a generar las rutas de la autenticacion
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('showProductDashboard/{id}', [HomeController::class, 'showProduct']);

Route::post('updateProductDashboard', [HomeController::class, 'updateProduct']);

Route::post('destroyProduct/{id}', [HomeController::class, 'destroyProduct']);



Route::get('/graficas', [App\Http\Controllers\UserController::class, 'graficas'])->name('graficas');



Route::get('/index', [App\Http\Controllers\UserController::class, 'index'])->name('index');

Route::get('/pdf', [App\Http\Controllers\UserController::class, 'pdf'])->name('pdf');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/payment-form', [PaymentController::class, 'showForm'])->name('paymentForm');
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('processPayment');
