<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Validator;
class ProductsAdminController extends Controller
{
    public static function getAllProducts(){
        return view('admin.manage-products', [
            'title' => 'Quản lý sản phẩm',
            // DATa
            'products' => Products::getAllProductEdit(),
        ]);
    }
    public static function editProduct(Request $request){
        $id =  $request->query('id');
        
        return view('admin.edit-products',[
            'title'=>'Chỉnh sữa sản phẩm',
            'products'=>Products::getByProductId($id),
            'categorys' => Category::getAll(),
            'subcategories' => SubCategory::getAll(),
        ]);
    }
    //Update imgae 1
    public static function updateImage1(Request $request){
        $id = $request->query(('id'));
        return view('admin.update-image1',[
            'title'=>'Chỉnh sữa ảnh 1',
            'products'=>Products::getByProductId($id),
        ]);
    }
    public static function submitImage1(Request $request){
        $id = $request->query(('id'));
        // Tien hanh luu anh public image tam 
        $request->file('productimage1')->move(public_path('productimages/'.$id.''),$request->file('productimage1')->getClientOriginalName());
        $updateImage1 = Products::updImage1($id,$request->file('productimage1')->getClientOriginalName());
        return view('admin.update-image1',[
            'title'=>'Chỉnh sữa ảnh 1',
            'products'=>Products::getByProductId($id),
        ]);
    }
    // end update imgae 1

     //Update imgae 2
        public static function updateImage2(Request $request){
            $id = $request->query(('id'));
            return view('admin.update-image2',[
                'title'=>'Chỉnh sữa ảnh 2',
                'products'=>Products::getByProductId($id),
            ]);
        }
        public static function submitImage2(Request $request){
            $id = $request->query(('id'));
            // Tien hanh luu anh public image tam 
            $request->file('productimage2')->move(public_path('productimages/'.$id.''),$request->file('productimage2')->getClientOriginalName());
            $updateImage1 = Products::updImage2($id,$request->file('productimage2')->getClientOriginalName());
            return view('admin.update-image2',[
                'title'=>'Chỉnh sữa ảnh 2',
                'products'=>Products::getByProductId($id),
            ]);
        }
        // end update imgae 2
        //Update imgae 3
    public static function updateImage3(Request $request){
        $id = $request->query(('id'));
        return view('admin.update-image3',[
            'title'=>'Chỉnh sữa ảnh 3',
            'products'=>Products::getByProductId($id),
        ]);
    }
    public static function submitImage3(Request $request){
        $id = $request->query(('id'));
        // Tien hanh luu anh public image tam 
        $request->file('productimage3')->move(public_path('productimages/'.$id.''),$request->file('productimage3')->getClientOriginalName());
        $updateImage1 = Products::updImage3($id,$request->file('productimage3')->getClientOriginalName());
        return view('admin.update-image3',[
            'title'=>'Chỉnh sữa ảnh 3s',
            'products'=>Products::getByProductId($id),
        ]);
    }
    // end update imgae 3
    //update product 
    public static function updateProduct(Request $request){
        $id = $request->query(('id'));
        $update = '';  
        $product= [
            "category" =>  $request->category,
            "subcategory" =>  $request->subcategory,
            "productName" =>  $request->productName,
            "productCompany" => $request->productCompany,
            "productPrice" =>  $request->productprice,
            "productPriceBeforeDiscount" =>  $request->productpricebd,
            "productDescription" =>  $request->productDescription,
            "shippingCharge"=>$request->productShippingcharge,
            "productAvailability"=>$request->productAvailability,
        ];
        
         $updateProduct = Products::updateProduct($product,$id);
         if($updateProduct){
             $update==true;
         }
         else
         $update==false;
         return view('admin.edit-products',[
            'title'=>'Chỉnh sữa sản phẩm',
            'products'=>Products::getByProductId($id),
            'categorys' => Category::getAll(),
            'subcategories' => SubCategory::getAll(),
            'update' => $update
        ]);
    }
    public static function deleteProduct(Request $request){
        $id = $request->query(('id'));
        $delete = Products::deleteProduct(($id));
        return view('admin.manage-products', [
            'title' => 'Quản lý sản phẩm',
            // DATa
            'products' => Products::getAllProductEdit(),
        ]);
    }
}
