<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Services\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function submitLogin (Request $rq, User $user) {

        $validator = Validator::make($rq->all(), [
            'contactno' => 'required|min:10|max:12'
        ]);

        if ($validator -> fails()){
            return redirect('login')->with('msg', 'Số điện thoại không đúng định dạng.');
        } else {
            $validator = Validator::make($rq->all(), [
                'contactno' => 'unique:users,"contactno"'
            ]);

            if($validator -> fails()) {
                $login = Users::getByContactno($rq->get('contactno'));
                $user->setUser($login);
                return redirect('home');
            } else {
                return redirect('login')->with('msg', 'Số điện thoại không tồn tại trên hệ thống');
            }
        }
    }
}
