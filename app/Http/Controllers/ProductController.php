<?php
    
namespace App\Http\Controllers;
use App\Models\Products;
class ProductController  extends Controller {

    function detail($id){
        $product = Products::getByProductId($id);
        return view('product-details',['product'=>$product,'title'=>'Chi tiet']);
    }
}
?>
