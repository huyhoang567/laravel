<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory; 
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;
// 
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

// 
    public function submitInserProduct(Request $request){
        //Lay cac gia tri product luu vao mang
        $validator = Validator::make($request->all(), [
            'category'=> 'required',
            'subcategory'=> 'required',
            'productAvailability'=> 'required',
            'productName' => 'required|min:5',
            'productDescription' => 'required|min:8',
            'productCompany' => 'required|min:3',
            "productpricead" => 'required|min:4|max:10',
            "productpricebd" =>'max:10',
            "productShippingcharge" => 'max:10',

        ]);
        if ($validator -> fails()){
            echo "<script> alert('Thêm sản phẩm không thành công.Vui lòng điền đúng thông tin')</script>";
            return view('admin.insert-products',[
                'title'=>'Thêm sản phẩm',
                'categorys' => Category::getAll(),
                'subcategories' => SubCategory::getAll(),
            ]);
        }
        else{
         $product= [
             "category" =>  $request->category,
             "subcategory" =>  $request->subcategory,
             "productName" =>  $request->productName,
             "productCompany" => $request->productCompany,
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
}
