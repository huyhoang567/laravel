<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
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
}
