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
}
