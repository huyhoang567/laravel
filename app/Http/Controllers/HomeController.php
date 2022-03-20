<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CartHelper;
use DB;
use Validator;

class HomeController extends Controller {
    public static function Home() {
        // Config page
        $title = "Trang chủ";
        // Data
        
        // Handle

        // Return
        return view('home', [
            'title' => $title,
        ]);
    }
}