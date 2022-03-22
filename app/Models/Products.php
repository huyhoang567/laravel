<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
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
}
