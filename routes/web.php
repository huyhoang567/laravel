<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Helpers\User;
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

Route::get('/', function() {
    return HomeController::Home();
});
Route::get('/home', function() {
    return HomeController::Home();
});
Route::get('/bill', function () {
    return view('bill', [
        'title' => 'Hóa đơn'
    ]);
});
Route::get('/login', function () {
    return view('login',[
        'title' => 'Đăng nhập'
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/account', function () {
    return view('my-account');
});
Route::get('/my-cart', function () {
    return view('my-cart');
});
Route::get('/my-wishlist', function () {
    return view('my-wishlist');
});
Route::get('/order-detail', function () {
    return view('order-detail');
});
Route::get('/order-history', function () {
    return view('order-history');
});
Route::get('/payment-method', function () {
    return view('payment-method');
});
Route::get('/pending-orders', function () {
    return view('pending-orders');
});
Route::get('/product-details/{id}',[ProductController::class,'detail']);
Route::get('/search-result', function () {
    return view('search-result');
});
Route::get('/sub-category', function () {
    return view('sub-category');
});
Route::get('/track-orders', function () {
    return view('track-orders');
});
// admin
Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('admin/category', function () {
    return view('admin/category');
});
Route::get('admin/change-password', function () {
    return view('admin/change-password');
});
Route::get('admin/delivered-orders', function () {
    return view('admin/delivered-orders');
});
Route::get('admin/edit-category', function () {
    return view('admin/edit-category');
});
Route::get('admin/edit-products', function () {
    return view('admin/edit-products');
});
Route::get('admin/edit-subcategory', function () {
    return view('admin/edit-subcategory');
});
Route::get('admin/insert-products', function () {
    return view('admin/insert-products');
});
Route::get('admin/manage-products', function () {
    return view('admin/manage-products');
});
Route::get('admin/manage-users', function () {
    return view('admin/manage-users');
});
Route::get('admin/pending-orders', function () {
    return view('admin/pending-orders');
});
Route::get('admin/subcategory', function () {
    return view('admin/subcategory');
});
Route::get('admin/today-orders', function () {
    return view('admin/today-orders');
});
Route::get('admin/update-image1', function () {
    return view('admin/update-image1');
});
Route::get('admin/update-image2', function () {
    return view('admin/update-image2');
});
Route::get('admin/update-image3', function () {
    return view('admin/update-image3');
});
Route::get('admin/update-orders', function () {
    return view('admin/update-orders');
});
Route::get('admin/user-logs', function () {
    return view('admin/user-logs');
});

