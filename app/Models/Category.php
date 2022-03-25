<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
// use Nette\Utils\Strings;

class Category extends Model
{
    use HasFactory;
    // 
    public static function getAll(){
        $value = DB::table('category')->get();
        return $value;
    }
    public static function getById($id){
        $value = DB::table('category')->where('id','=',$id)->get();
        return $value;
    }
    public static function getSubCategoryById($subId){
        $value = DB::table('subcategory')->where('categoryid', "=", $subId)->get();
        return $value;
    }
    //lấy categoryname
    public static function getCategoryName($categoryName){
        $value = DB::table('category')->where('categoryName', "=", $categoryName)->get();
        return $value;
    }    
    // insert category
    public static function insert($categoryName, $categoryDescription){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s',time());
        $value = DB::table("category")
                -> insertGetId([
                    'categoryName' => $categoryName,
                    'categoryDescription' => $categoryDescription,
                    'creationDate' => $date,
                    'updationDate' => '',
                ]);
        return $value;
    }
    //delete category
    public static function del($id){
        $value = DB::table('category')
                    ->where('id','=',$id)
                    ->delete();
        return $value;
    }
    //update category
    public static function updt($id, $categoryName, $categoryDescription, $creationDate, $updationDate){
        $value = DB::table('category')
                    ->where('id', $id)
                    ->update([
                        'categoryName' => $categoryName,
                        'categoryDescription' => $categoryDescription,
                        'creationDate' => $creationDate,
                        'updationDate' => $updationDate
                    ]);
        return $value;
    }
}
