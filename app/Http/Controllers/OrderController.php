<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Ordertrackhistory;

class OrderController extends Controller
{
    //
    public static function orders (){
        $title = 'Today Orders';
        $orders = Orders::todayOrders();

        return view('admin/today-orders', [
            'title' => $title,
            'orders' => $orders
        ]);
    }
    public static function updateOrder (Request $request){
        // $title = 'Update Order';
        $id = $request -> all()['id'];
        $order = Orders::updateOrder($id);
        $ordertrackhistory = Ordertrackhistory::getId($id);
        return view('admin/update-order', [
            // 'title' => $title,
            'order' => $order,
            'ordertrackhistory' => $ordertrackhistory
        ]);
    }
    public static function pendingOrder (){
        $pendingorder = Orders::pendingOrder();
        return view('admin/pending-orders',[
            'pendingorder' => $pendingorder
        ]);
    }
    public static function deliveredOrder (){
        $deliveredorder = Orders::deliveredOrder();
        return view('admin/delivered-orders',[
            'deliveredorder' => $deliveredorder
        ]);
    }
    public static function postUpdate(Request $request){

        $id = $request -> all()['id'];
        $order = Orders::updateOrder($id);
        $status = $request -> get('status');
        $value = Orders::postUpdate($status, $id);
        // dd($value);
        if($value == 1){
            echo '<script> alert ("Cập nhật thành công")</script>';
            if ($status == 'Delivered'){
                echo '<meta http-equiv="refresh" content="0; url=delivered-orders"/>';
            }else{
                echo '<meta http-equiv="refresh" content="0; url=pending-orders"/>';
            }
        }else{
            echo '<script> alert ("Cập nhật lỗi")</script>';
            echo '<meta http-equiv="refresh" content="0; url=today-orders"/>';
        }
    }
}
