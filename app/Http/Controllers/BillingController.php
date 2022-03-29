<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Services\CartHelper;
use App\Services\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BillingController extends Controller
{
    // ...
    public function billing (Request $rq, CartHelper $cartHelper, User $userService) {
        $validator = Validator::make($rq->all(), [
            'name' => 'required| min: 6',
            'contactno' => 'required|min:10|max:12',
            'shippingAddress' => 'required|min:15'
        ]);
        if ($validator -> fails()){
            return redirect('my-cart')
                    -> withErrors($validator)
                    -> withInput();
        } else {
            $check = Validator::make($rq->all(), [
                'contactno' => 'unique:users,"contactno"'
            ]);
            if($check -> fails()) {
                $user = Users::getByContactno($rq->get('contactno'));
                $userService->setUser($user);
                return redirect('home');
            } else {
                $user = [
                    'name' => $rq->get('name'),
                    'contactno' => $rq->get('contactno'),
                    'shippingAddress' => $rq->get('shippingAddress'),
                    'billingAddress' => ''
                ];
                $userId = Users::insert($user);
                dd($userId);
            }
        }
    }
}
