<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;

// Page d’accueil
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::resource('products', ProductController::class);

// Page d'administration
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Produits
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// Réservations
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
// Route::get('/reservations', [ReservationController::class, 'index']);
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
// Route::post('/reservations', [ReservationController::class, 'store']);
Route::get('/reservations/all', [ReservationController::class, 'index'])->name('reservations.all');

// Paiements
// Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
