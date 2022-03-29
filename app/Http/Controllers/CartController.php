<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Services\CartHelper;
use App\Services\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function Cart() {
        // ... config
        $title = 'Giỏ hàng của bạn';

        // ... data
        

        // Return
        return view('my-cart', [
            'title' => $title,

            //...
            'cart'=> new CartHelper(),
            'user' => new User()
        ]);
    }

    public function addToCart_get($productId, CartHelper $cartService) {

        //...
        $product = Products::getByProductId($productId);
        $product->quantity = 1;
        
        if(!$cartService->existsProduct($product)) {
            $cartService->pushCart($product);
        }


        return redirect('/my-cart');
    }
    public function addToCart_post( CartHelper $cartService, Request $rq) {

        // dd($rq->all());
        $productId = $rq->get('id');
        //...
        $product = Products::getByProductId($productId);
        $product->quantity = $rq->get('quantity');
        
        if(!$cartService->existsProduct($product)) {
            $cartService->pushCart($product);
        }


        return redirect('/my-cart');
    }

    public function update_mycart_post( CartHelper $cartService, Request $rq) {

        
        $productId = $rq->get('id');
        $quantity = $rq->get('quantity');
        //...
        $cartService->update($productId, $quantity);
        
        return redirect('/my-cart');
    }

    public function delete_mycart( CartHelper $cartService, Request $rq) {
        
        
        $productId = $rq->get('id');
        //...
        $cartService->removeProduct($productId);
        
        return redirect('/my-cart');
    }
}
