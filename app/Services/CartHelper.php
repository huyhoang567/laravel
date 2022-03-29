<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class CartHelper {

    public function existsProduct( $product): bool {
        $cart = $this->getCart();
        
        if(count($cart) == 0)
            return false;

        $map_ids = array_map(function($e) {
            return $e->id;
        }, $cart);

        $isval = in_array($product->id, $map_ids);

        return $isval;
    }

    public function existsCart() : bool {
        if(Session::has('cart'))
            return true;
        return false;
    }

    public function getCart() : array {
        if($this->existsCart())
            return Session::get('cart');
        else    
            return [];
    }

    public function pushCart($product): void {
        $cart = $this->getCart();
        Session::push('cart',
            $product
        );
    }

    public function removeCart() : void {
        Session::forget('cart');
    }

    public function removeProduct($productId) : void {
        $cart = $this->getCart();
        $newCart = [];

        foreach ($cart as $key => $each) {
            if($each->id != $productId) {
                array_push($newCart, $each);
            }
        }
        Session::put('cart', $newCart);
    }

    public function update ($productId, $quantity): void {
        $cart = $this->getCart();

        
        foreach ($cart as $key => $each) {
            if($each->id == $productId) {
                $each->quantity = $quantity;
                break;
            }
        }
        Session::put('cart', $cart);
    }
}



