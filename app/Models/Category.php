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
    public static function getSubCategoryById($subId){
        $value = DB::table('subcategory')->where('categoryid', "=", $subId)->get();
        return $value;
    }
}
