<?php
// use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;

class CartHelper extends Controller {

    public static function exists() {
        if(empty($_SESSION['cart']))
            return false;
        return true;
    }

    public static function getCart() {
        if(empty($_SESSION['cart']))
            return [];
        return $_SESSION['cart'];
    }

    public static function pushCart($product) {
        $_SESSION['cart'] = [
            $product, 
            ...self::getCart()
        ];
    }

    public static function removeCart() {
        unset($_SESSION['cart']);
    }
}



