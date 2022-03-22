<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;
    public static function login($username, $password){
        $value = DB::table('admin')
                ->where('username', '=', $username)
                ->where('password', '=', $password)
                ->get();
        return $value;
    }
}
