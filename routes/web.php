<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\LoginRegisterController;
use App\Http\Controllers\Front\MyAccountController;
use App\Http\Controllers\Front\OrderCompleteController;
use App\Http\Controllers\Front\ProductDetailsController;
use App\Http\Controllers\Front\ShopListController;
use App\Http\Controllers\Front\WishlistController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/shop-list', [ShopListController::class, 'index'])->name('shop-list');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/login-register', [LoginRegisterController::class, 'index'])->name('login-register');
Route::get('/my-account', [MyAccountController::class, 'index'])->name('my-account');
Route::get('/order-complete', [OrderCompleteController::class, 'index'])->name('order-complete');
Route::get('/product-details', [ProductDetailsController::class, 'index'])->name('product-details');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Route::prefix("cms")->name("admin.")->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name("home");

    Route::prefix("user")->name("user.")->group(function () {
        Route::get('/', [UserController::class, 'index'])->name("index");
        Route::get('/create', [UserController::class, 'create'])->name("create");
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name("edit");
        Route::post('/update', [UserController::class, 'update'])->name("update");
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name("delete");
    });
});