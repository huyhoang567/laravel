<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubCategory extends Model
{
    use HasFactory;
    
    public static function getAll(){
        $value = DB::table('subcategory')->get();
        return $value;
    }
    public static function getById($id){
        $value = DB::table('subcategory')->where('id','=',$id)->get();
        return $value;
    } 
    public static function viewSubCategory(){
        $value = DB::table('subcategory')
                    ->join('category','category.id','=','subcategory.categoryid')
                    ->select('subcategory.id','category.categoryName','subcategory.subcategory','subcategory.creationDate','subcategory.updationDate')
                    ->get();
        return $value;
    }
    public static function getSubCategoryById($subId){
        $value = DB::table('subcategory')->where('categoryid', "=", $subId)->get();
        return $value;
    }
    public static function insert ($idCategory, $subCategoryName){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s',time());
        $value = DB::table("subcategory")
                -> insertGetId([
                    'categoryid' => $idCategory,
                    'subcategory' => $subCategoryName,
                    'quantity' => null,
                    'creationDate' => $date,
                    'updationDate' => ''
                ]);
        return $value;
    }
    public static function del($id){
        $value = DB::table('subcategory')
                    ->where('id','=',$id)
                    ->delete();
        return $value;
    }
    public static function updt($id, $categoryId, $subCategory, $creationDate, $updationDate){
        $value = DB::table('subcategory')
                    ->where('id', $id)
                    ->update([
                        'categoryid' => $categoryId,
                        'subcategory' => $subCategory,
                        'quantity' => null,
                        'creationDate' => $creationDate,
                        'updationDate' => $updationDate
                    ]);
        return $value;
    }
}
