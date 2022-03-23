<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderAdminController;
use App\Helpers\User;
use App\Http\Controllers\UsersAdminController;
use Illuminate\Http\Request;

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

Route::get('/', [ HomeController::class, 'Home' ]);
Route::get('/home', [ HomeController::class, "Home" ]);
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
Route::get('/product-details', [ ProductController::class, 'detail_products']);
Route::get('/search-result', function () {
    return view('search-result');
});
Route::get('/sub-category', function () {
    return view('sub-category');
});
Route::get('/track-orders', function () {
    return view('track-orders');
});

// ============================================   Handle user =============================================================

    // Add to cart
    Route::get('/addToCart/{productId}', [ HomeController::class, 'addToCart' ]);

// Admin ==================================================================================================================






// admin ...
    // login
Route::get('/admin', function () {
    return view('admin/admin');
}) -> middleware('verifyLoginAdmin');
Route::post('postLogin', 'App\Http\Controllers\AdminLogin@postLogin');
// logout
Route::get('admin/logout', 'App\Http\Controllers\AdminLogin@logout');
// 
Route::get('admin/category', function () {
    return view('admin/category');
}) -> middleware('checkAdmin');
Route::get('admin/change-password', function () {
    return view('admin/change-password');
}) -> middleware('checkAdmin');


// ========= ORDERS Admin
Route::get('admin/delivered-orders', [OrderAdminController::class, "deliveredOrder"]) -> middleware('checkAdmin');

Route::get('admin/pending-orders', [OrderAdminController::class, "pendingOrder"]) -> middleware('checkAdmin');

Route::get('admin/today-orders', [OrderAdminController::class, "orders"]) -> middleware('checkAdmin');

Route::get('admin/update-order', [OrderAdminController::class, "updateOrder"]) -> middleware('checkAdmin');

Route::post('admin/update', [OrderAdminController::class, "postUpdate"]);

// ======== End
// ======== USERS admin
Route::get('admin/manage-users', [UsersAdminController::class, 'manage_users']) -> middleware('checkAdmin');

// ======== End
Route::get('admin/edit-category', function () {
    return view('admin/edit-category');
}) -> middleware('checkAdmin');
Route::get('admin/edit-products', function () {
    return view('admin/edit-products');
}) -> middleware('checkAdmin');
Route::get('admin/edit-subcategory', function () {
    return view('admin/edit-subcategory');
}) -> middleware('checkAdmin');
Route::get('admin/insert-products', function () {
    return view('admin/insert-products');
}) -> middleware('checkAdmin');
Route::get('admin/manage-products', function () {
    return view('admin/manage-products');
}) -> middleware('checkAdmin');

Route::get('admin/subcategory', function () {
    return view('admin/subcategory');
}) -> middleware('checkAdmin');


Route::get('admin/update-image1', function () {
    return view('admin/update-image1');
}) -> middleware('checkAdmin');
Route::get('admin/update-image2', function () {
    return view('admin/update-image2');
}) -> middleware('checkAdmin');
Route::get('admin/update-image3', function () {
    return view('admin/update-image3');
}) -> middleware('checkAdmin');

Route::get('admin/user-logs', function () {
    return view('admin/user-logs');
}) -> middleware('checkAdmin');

