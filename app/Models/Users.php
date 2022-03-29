<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    // ....

    private static function get() {
        return DB::table('users');
    }

    public static function getAll () {
        $value = self::get()->get();
        return $value;
    }

    public static function getByContactno ($phone)  {
        $value = DB::table('users')->where('contactno', '=', $phone)->get();
        if(isset($value[0]))
            return $value[0];
        return [];
    }

    public static function getById ($id)  {
        $value = DB::table('users')->where('id', '=', $id)->get();
        if(isset($value[0]))
            return $value[0];
        return [];
    }

    public static function insert ($user): string {
        $value = DB::table('users')->insertGetId($user);
        if($value)
            return $value;
        return false;
    }
}
