<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ordertrackhistory extends Model
{
    use HasFactory;


    // ...
    public static function getId($id){
        $value = DB::table('ordertrackhistory')
                    -> where('orderId','=',$id)
                    -> get();
        return $value;
    }
    // ...
    public static function insert($orderhistory) {
        $id = DB::table('ordertrackhistory')->insertGetId($orderhistory);
        return $id;
    }
}
