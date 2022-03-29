<?php

namespace App\Http\Controllers;

use App\Services\CartHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BillingController extends Controller
{
    // ...
    public function billing (Request $rq, CartHelper $cartHelper) {
        $validator = Validator::make($rq->all(), [
            'customerName' => 'required| min: 6',
            'phone' => 'required|min:10|max:12',
            'shippingaddress' => 'required|min:15'
        ]);
        if ($validator -> fails()){
            
            return redirect('my-cart')
                    -> withErrors($validator)
                    -> withInput();
        } else {
            dd('success');
        }
    }
}
