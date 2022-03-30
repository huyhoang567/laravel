<?php
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\CategoryController;
use App\Helpers\User;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InsertDataAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersAdminController;
use App\Http\Controllers\ProductsAdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
Route::post('/submitlogin', [LoginController::class, 'submitLogin']);
Route::get('/login', function () {
    return view('login',[
        'title' => 'Đăng nhập'
    ]);
});
Route::get('/logout', function () {
    Session::remove('user');
    return redirect('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/category', [CategoryController::class, "Category"]);
Route::get('/account', function () {
    return view('my-account');
});
Route::get('/my-cart', [CartController::class, 'Cart']);
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
    Route::get('/addToCart/{productId}', [ CartController::class, 'addToCart_get' ]);
    Route::post('/addToCart', [ CartController::class, 'addToCart_post' ]);
    Route::post('/update-mycart', [ CartController::class, 'update_mycart_post' ]);
    Route::delete('/delete-mycart', [ CartController::class, 'delete_mycart' ]);

    // Đặt hàng
    Route::post('billing', [BillingController::class, 'billing']);

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

Route::post('admin/insert-products', [InsertDataAdminController::class, 'submitInserProduct']);

Route::get('admin/manage-products',[ProductsAdminController::class,'getAllProducts']) -> middleware('checkAdmin');
Route::get('admin/manage-products.php',[ProductsAdminController::class,'deleteProduct']) -> middleware('checkAdmin');
Route::get('admin/subcategory', [CategoryController::class, 'getSubCategory']) -> middleware('checkAdmin');
Route::post('admin/postsubcategory', [CategoryController::class, "createSubCategory"]);
Route::get('admin/del-subcategory', [CategoryController::class, 'deleteSubCategory']) -> middleware('checkAdmin');
//edit product
Route::get('admin/edit-products.php',[ProductsAdminController::class,'editProduct']) -> middleware('checkAdmin');
Route::post('admin/update-product',[ProductsAdminController::class,'updateProduct']) -> middleware('checkAdmin');
//update image 1
Route::get('admin/update-image1.php',[ProductsAdminController::class,'updateImage1']) -> middleware('checkAdmin');
Route::post('admin/update-image1.php',[ProductsAdminController::class,'submitImage1'])-> middleware('checkAdmin');
//update image 2
Route::get('admin/update-image2.php',[ProductsAdminController::class,'updateImage2']) -> middleware('checkAdmin');
Route::post('admin/update-image2.php',[ProductsAdminController::class,'submitImage2'])-> middleware('checkAdmin');
//update image 3
Route::get('admin/update-image3.php',[ProductsAdminController::class,'updateImage3']) -> middleware('checkAdmin');
Route::post('admin/update-image3.php',[ProductsAdminController::class,'submitImage3'])-> middleware('checkAdmin');

Route::get('admin/user-logs', function () {
    return view('admin/user-logs');
}) -> middleware('checkAdmin');

