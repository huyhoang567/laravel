<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Validator;


class HomeController extends Controller {
    public static function Home() {
        // Config page
        $title = "Trang chủ";
        // Data
        $category = DB::select('select * from category');
        $products = DB::select('select * from products');

        // Handle

        // Return
        return view('home', [
            'title' => $title,
            'category' => $category,
            'products' => $products,
        ]);
    }
}