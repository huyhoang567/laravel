<?php
    
namespace App\Http\Controllers;
use App\Models\Products;
use App\Services\CartHelper\CartHelper;

class ProductController  extends Controller {

    function detail($id){
        
        // Config ...
        $title = $id;
        // Data
        $product = Products::getByProductId($id);
        return view('product-details',[
            'title' => $title,

            // Data
            'product' => $product,
            "cart" => new CartHelper()

        ]);
    }
}
?>
