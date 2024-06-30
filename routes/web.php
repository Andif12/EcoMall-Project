<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('ourVision', [HomeController::class, 'ourVision'])->name('ourVision');
Route::get('homeShop', [HomeController::class, 'homeShop'])->name('homeShop');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register.post');

Route::middleware(['auth'])->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('profile/address', [ProfileController::class, 'storeAddress'])->name('profile.address');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/payments', [PaymentController::class, 'store'])->name('payments');
Route::get('/flash-sale-product/{id}', [HomeController::class, 'homeShop'])->name('flashSaleProduct.show');

Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/recommended', [ProductController::class, 'recommendedProducts'])->name('recommended')->middleware('auth');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
// Route::get('/product/{id}', [ProductController::class, 'show'])->name('partials.lihatProduk');

require __DIR__.'/auth.php';
