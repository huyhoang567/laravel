<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Ordertrackhistory;
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
            } else {
                $userInsert = [
                    'name' => $rq->get('name'),
                    'contactno' => $rq->get('contactno'),
                    'shippingAddress' => $rq->get('shippingAddress'),
                    'billingAddress' => ''
                ];
                $userId = Users::insert($userInsert);
                $user = Users::getById($userId);
                $userService->setUser($user);
            }
            // ... insert order
            $order = [
                'userId' => $userService->getUser()->id,
                'paymentMethod' => '',
                'orderStatus' => 'Đang chờ',
                'remark' => 'Khách đang chờ giao hàng'
            ];
            $idOrder = Orders::insert($order);

            if($idOrder) {
                foreach ($cartHelper->getCart() as $key => $pro) {
                    $ordertrack = [
                        'orderId' => $idOrder,
                        'productId' => $pro->id,
                        'quantity' => $pro->quantity
                    ];
                    $idOT = Ordertrackhistory::insert($ordertrack);
                }
            }

            $cartHelper->removeCart();

            return redirect('home');
        }
    }
}
