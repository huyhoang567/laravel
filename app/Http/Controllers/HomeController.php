<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Validator;


class HomeController extends Controller {
    public static function Home() {
        // Config page
        $title = "Trang chủ";
        // Data
        $category = Category::getAll();
        $products = Products::getAll();

        // Handle

        // Return
        return view('home', [
            'title' => $title,
            'category' => $category,
            'products' => $products,
        ]);
    }

}