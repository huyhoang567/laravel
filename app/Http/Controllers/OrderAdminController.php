<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Ordertrackhistory;

class OrderAdminController extends Controller
{
    //
    public static function orders (){
        $title = 'Đơn đặt hàng hôm nay';
        $orders = Orders::todayOrders();
        // dd($orders);
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
        // dd($pendingorder);
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
        $orderDate = $request -> get('orderDate');
        // dd($orderDate);
        $value = Orders::postUpdate($status, $id, $orderDate);
        // dd($value);
        echo '<script> alert ("Cập nhật thành công")</script>';
        echo '<script>window.close()</script>';
    }
}
