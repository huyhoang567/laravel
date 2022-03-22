<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Iluminate\Support\Facades\Session;
use App\Http\Middleware\RedirectIfAuthenticated;
// use Illuminate\Support\Facades\DB;

class AdminLogin extends Controller
{
    public static function index(){
        return view('admin/admin');
    }
    public static function postLogin(Request $request)
        {
        $username = $request -> get('username');    
        $password = $request -> get('password');
        $admin = Admin::login($username, $password);
        
        print_r($admin);
        
        if ($admin) {
            session() -> put('admin', $username);
            // dd('Đăng nhập thành công');
            return redirect('admin/today-orders');
        }
    }
    public static function checkSession(Request $request){
        if ($request->session()->get('admin')){
            return true;
        }else{
            return false;
        }
    }
    public static function logout(Request $request){
        $request->session()->forget('admin');
        return redirect('admin');
    }
}