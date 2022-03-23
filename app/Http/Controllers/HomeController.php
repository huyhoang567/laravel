<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Providers\A;
use App\Services\CartHelper\CartHelper;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

            'cart' => new CartHelper()
        ]);
    }

    public function addToCart($productId) {

        //...
        $product = Products::getByProductId($productId);
        
        if(Session::has('cart')) {
            $cart = Session::get('cart');
            Session::put('cart', [
                $product, ...$cart
            ]);
        } else {
            Session::put('cart', [$product]);
        }

        // dd(Session::all());

        return redirect('/home');
    }

}