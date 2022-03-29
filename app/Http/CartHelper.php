<?php

namespace App\Services\CartHelper;

class CartHelper {

    public function exists() {
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



