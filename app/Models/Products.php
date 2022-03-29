<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{   
    protected $table = 'products';
    use HasFactory;
    // Lấy tất cả
    public static function getAll () {
        $value = DB::table('products')->get();
        return $value;
    }
    // Lấy sản phẩm theo Category ID
    public static function getByCategoryId($categoryId) {
        $value = DB::table('products')->where('category', '=', $categoryId)->get();
        return $value;
    }
    // Lấy sản phẩm theo subCategory
    public static function getBySubCategoryId($subId) {
        $value = DB::table('products')->where('subcategory', '=', $subId)->get();
        return $value;
    }
    //
    public static function getByProductId ($id){
        $value = DB::table('products')->find($id);
        return $value;
    }
    // Lấy sản phẩm theo tên
    public static function getByProductName ($producName){

        $value = DB::table('products')->where('productName', $producName)->get();
        if(isset($value[0]))
            return $value[0];
        return false;
    }
    public static function insertProduct($product){
        $value= DB::table('products')->insertGetId($product);
        return $value;
    }
    //lấy sản phẩm để chỉnh sữa 
    public static function getAllProductEdit(){
        $value =DB::table('products')
                ->join('category','products.category', '=', 'category.id')
                ->join('subcategory','products.subCategory', '=', 'subcategory.id')
                ->select('products.*','category.categoryName','subcategory.subcategory')
                ->get();
        return $value;
    }
    //update image 1
    public static function updImage1($id, $image1Name){
        $value = DB::table('products')
                    ->where('id', $id)
                    ->update([
                        'productImage1'=>$image1Name,
                    ]);
        return $value;
    }
      //update image 2
    public static function updImage2($id, $image1Name){
        $value = DB::table('products')
                    ->where('id', $id)
                    ->update([
                        'productImage2'=>$image1Name,
                    ]);
        return $value;
    }
      //update image 3
    public static function updImage3($id, $image1Name){
        $value = DB::table('products')
                    ->where('id', $id)
                    ->update([
                        'productImage3'=>$image1Name,
                    ]);
        return $value;
    }
    public static function updateProduct($product,$id){
        $value= DB::table('products')
                ->where('id', $id)
               ->update($product);
return $value;
    }
    public static function deleteProduct($id){
        $value = DB::table('products')
        ->where('id','=',$id)
        ->delete();
        return $value;
    }
}
