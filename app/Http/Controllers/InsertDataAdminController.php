<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Products;
class InsertDataAdminController extends Controller
{
    // ...
    public function InsertProductAdmin () {
        // ... Config
        $title = "Chèn sản phẩm";
        // ... Data
        // Return
        return view('admin.insert-products', [
            'title' => $title,


            // DATa
            'categorys' => Category::getAll(),
            'subcategories' => SubCategory::getAll(),

        ]);
    }
    public function submitInserProduct(Request $request){
        //Lay cac gia tri product luu vao mang
         $product= [
             "category" =>  $request->category,
             "subCategory" =>  $request->subCategory,
             "productName" =>  $request->productName,
             "productCompany" => $request->productName,
             "productPrice" =>  $request->productpricead,
             "productPriceBeforeDiscount" =>  $request->productpricebd,
             "productImage1" =>   $request->file('productimage1')->getClientOriginalName(),
             "productImage2" =>  $request->file('productimage2')->getClientOriginalName(),
             "productImage3" =>  $request->file('productimage3')->getClientOriginalName(),
             "productDescription" =>  $request->productDescription,
             "shippingCharge"=>$request->productShippingcharge,
             "productAvailability"=>$request->productAvailability,

         ];
       $idProduct = Products::insertProduct($product);
         // Tien hanh luu anh public image tam 
         $request->file('productimage1')->move(public_path('productimages/'.$idProduct.''),$request->file('productimage1')->getClientOriginalName());
         $request->file('productimage2')->move(public_path('productimages/'.$idProduct.''),$request->file('productimage2')->getClientOriginalName());
         $request->file('productimage3')->move(public_path('productimages/'.$idProduct.''),$request->file('productimage3')->getClientOriginalName());
       
        //Goi ham insert product
    
        $title = "Chèn sản phẩm";
        // ... Data
        // Return
        return view('admin.insert-products', [
            'title' => $title,
            // DATa
            'categorys' => Category::getAll(),
            'subcategories' => SubCategory::getAll(),

        ]);
        
    }
}
