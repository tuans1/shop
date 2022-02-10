<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/sanpham', [ProductController::class, 'index']); // hiển thị sản phẩm , chạy hàm index trong ProductController
Route::post('/sanpham/create', [ProductController::class, 'create'])->name('create'); // chạy hàm create trong ProductController
Route::post('/sanpham/update', [ProductController::class, 'update'])->name('update'); // chạy hàm update trong ProductController

Route::get('/sanpham1', [CategoryController::class, 'index']); // loai sp
Route::get('/sanpham2', [ProducerController::class, 'index']); // hang sx

Route::get('/index', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/celendar', function () {
    return view('celendar');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});
//contact
Route::get('/contact', function () {
    return view('contact');
});
//customer
Route::get('/customer', function () {
    return view('customer');
});
//donhang
Route::get('/donhang', function () {
    return view('donhang');
});

//index1
Route::get('/index1', function () {
    return view('index1');
});
//newcustomer
Route::get('/newcustomer', function () {
    return view('newcustomer');
});
//product_detail
Route::get('/product_detail', function () {
    return view('product_detail');
});
//product
Route::get('/product', function () {
    return view('product');
});
//product2
Route::get('/product2', function () {
    return view('product2');
});
//products
Route::get('/products', function () {
    return view('products');
});
//register
Route::get('/register', function () {
    return view('register');
});
