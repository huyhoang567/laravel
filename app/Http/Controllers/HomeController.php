<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;

use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;


class HomeController extends Controller {
    public static function Home() {
    
        // Config
        $title = "Trang chủ";
        
        // Data
        $category = Category::getAll();
        $products = Products::getAll();
        
        // Handle
        // dd(Session::all());
        // Return
        return view('home', [
            'title' => $title,

            'category' => $category,
            'products' => $products,

            
        ]);
    }


}