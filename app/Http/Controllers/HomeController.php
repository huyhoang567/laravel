<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Helpers\CartHelper;
use Validator;

class HomeController extends Controller {
    public static function Home() {
        // Config page
        $title = "Trang chủ";
        // Data
        $category = DB::select('select * from category');
        $products = DB::select('select categoryName, productCompany, productName, productImage1, productImage2, productImage3, productPrice, productPriceBeforeDiscount where category.id and products.category');

        // Handle

        // Return
        return view('home', [
            'title' => $title,
            'category' => $category,
            'products' => $products,
        ]);
    }
}