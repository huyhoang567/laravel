<?php
// use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;

<<<<<<< HEAD
class CartHelper {
=======
class CartHelper extends Controller {
>>>>>>> 5317fb3e3083afae3c138aba0e510f8aa4dc97c1

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



