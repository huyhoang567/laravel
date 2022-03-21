<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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