<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Services\CartHelper;
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
            'cart'=> new CartHelper()
        ]);
    }

    public function addToCart($productId, CartHelper $cartService) {

        //...
        $product = Products::getByProductId($productId);
        $product->quantity = 1;
        
        if(!$cartService->existsProduct($product)) {
            $cartService->pushCart($product);
        }


        return redirect('/product-details?productName=' . $product->productName);
    }
}
