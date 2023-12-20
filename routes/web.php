<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
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

Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('register', [UserController::class, 'register'])->name('register');
Route::get('account', [UserController::class, 'account'])->middleware('auth')->name('account');
Route::get('logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');
Route::post('password', [UserController::class, 'changePassword'])->middleware('auth')->name('password');

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('catelog', [WebsiteController::class, 'catelog'])->name('catelog');
Route::get('category/{id}', [WebsiteController::class, 'category'])->name('category');
Route::get('product/{slug}', [WebsiteController::class, 'product'])->name('product');

Route::group(['prefix' => 'cart', 'middleware' => ['auth']], function () {
    Route::get('', [CartController::class, 'cart'])->name('cart.show');
    Route::get('{pid}', [CartController::class, 'store'])->name('cart.add');
    Route::get('delete/{id}', [CartController::class, 'remove'])->name('cart.delete');
    Route::get('buy/{id}', [CartController::class, 'buyCart'])->name('cart.buy');
    Route::post('update', [CartController::class, 'updateCart'])->name('cart.update');
});

Route::group(['prefix' => 'checkout', 'middleware' => ['auth']], function () {
    Route::get('', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('order', [OrderController::class, 'store'])->name('order.save');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('login', [AuthController::class, 'checkLogin'])->name('admin.check');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => ['admin.auth']], function () {
        Route::get('dashboard', [AuthController::class, 'index'])->name('admin.dashboard');

        Route::get('category', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::get('category-add', [CategoryController::class, 'addCategory'])->name('category.add');
        Route::post('category-add', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
        Route::put('category-update/{id}', [CategoryController::class, 'update'])->name('category.update');

        Route::get('product', [ProductController::class, 'index'])->name('admin.product');
        Route::get('product/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::get('product-add', [ProductController::class, 'add'])->name('product.add');
        Route::post('product-add', [ProductController::class, 'store'])->name('product.store');
        Route::get('product-delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
        Route::put('product-update/{id}', [ProductController::class, 'update'])->name('product.update');

        Route::get('order', [AdminOrderController::class, 'index'])->name('admin.order');
    });
});
