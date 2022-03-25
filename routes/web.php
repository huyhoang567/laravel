<?php
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\CategoryController;
use App\Helpers\User;
use App\Http\Controllers\InsertDataAdminController;
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
Route::get('admin/category', [CategoryController::class, 'getCategory']) -> middleware('checkAdmin');
Route::get('admin/del-category', [CategoryController::class, 'deleteCategory']) -> middleware('checkAdmin');
Route::post('admin/postcategory', [CategoryController::class, "createCategory"]);
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
Route::get('admin/edit-category', [CategoryController::class, 'editCategory']) -> middleware('checkAdmin');
Route::post('admin/edit-category', [CategoryController::class, 'updateCategory']) -> middleware('checkAdmin');
Route::get('admin/edit-products', function () {
    return view('admin/edit-products');
}) -> middleware('checkAdmin');
Route::get('admin/edit-subcategory', [CategoryController::class, 'editSubCategory']) -> middleware('checkAdmin');
Route::post('admin/edit-subcategory', [CategoryController::class, 'updateSubCategory']) -> middleware('checkAdmin');
Route::get('admin/insert-products', [InsertDataAdminController::class, 'InsertProductAdmin']) -> middleware('checkAdmin');
Route::get('admin/manage-products', function () {
    return view('admin/manage-products');
}) -> middleware('checkAdmin');

Route::get('admin/subcategory', [CategoryController::class, 'getSubCategory']) -> middleware('checkAdmin');
Route::post('admin/postsubcategory', [CategoryController::class, "createSubCategory"]);
Route::get('admin/del-subcategory', [CategoryController::class, 'deleteSubCategory']) -> middleware('checkAdmin');
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

