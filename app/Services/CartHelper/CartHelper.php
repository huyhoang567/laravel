<?php

namespace App\Services\CartHelper;

use Illuminate\Support\Facades\Session;

class CartHelper {

    public function exists() {
        if(Session::has('cart'))
            return true;
        return false;
    }

    public function getCart() {
        if($this->exists())
            return Session::get('cart');
        return [];
    }

    public function pushCart($product) {
        Session::push('cart', $product);
    }

    public function removeCart() {
        Session::remove('cart');
    }
}



