<?php
    
namespace App\Http\Controllers;
use App\Models\Products;
use App\Services\CartHelper\CartHelper;
use Illuminate\Http\Request;

class ProductController  extends Controller {

    function detail_products(Request $rq){

        // ... Request
        $productName = $rq->get('productName');
        // dd($productName);
        // Config ...
        $title = $productName;
        // Data
        $product = Products::getByProductName($productName);
        if(!$product)
            return back();
        
        return view('product-details',[
            'title' => $title,

            // Data
            'product' => $product,
            "cart" => new CartHelper()

        ]);
    }
}
?>
