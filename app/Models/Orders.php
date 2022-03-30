<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{
    use HasFactory;



    // ...
    public static function insert($order) {
        $orderId = DB::table('orders')->insertGetId($order);
        return $orderId;
    }
    // ...
    public static function getAll(){
        $value = DB::table('orders') -> get();
        return $value;
    }
    //lấy dữ liệu today orders
    public static function todayOrders (){
        $t1="00:00:00";
        $from=date('Y-m-d')." ".$t1;
        $t1="23:59:59";
        $to=date('Y-m-d')." ".$t1;

        // $value = DB::select("select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.orderDate between '$from' and '$to'");
        // $orders = DB::select("select * from users u, orders o where u.id = o.userId and o.orderDate between '$from' and '$to'");
        $status = 'Đang chờ';
        $orders = DB::select("select * from users u, orders o where u.id = o.userId and orderStatus = '$status'");
        
        // ...
        $value = [];
        foreach ($orders as $key => $o) {
            $products = DB::select("select * from ordertrackhistory o, products p  where o.productid = p.id and  o.orderId = '$o->id'");
            $o->products = $products;
            array_push($value, $o);
        }
        return $value;
    }
    //lấy dữ liệu update orders theo id
    public static function updateOrder($id){
        $value = DB::select("select * from users u, orders o where u.id = o.userId and o.id = '$id'");
        if(isset($value[0]))
            return $value[0];
        return false;
    }
    //lấy dữ liệu pending orders
    public static function pendingOrder (){
        $status = 'Đang giao';
        $orders = DB::select("select * from users u, orders o where u.id = o.userId and orderStatus = '$status'");
        
        // ...
        $value = [];
        foreach ($orders as $key => $o) {
            $products = DB::select("select * from ordertrackhistory o, products p  where o.productid = p.id and  o.orderId = '$o->id'");
            $o->products = $products;
            array_push($value, $o);
        }
        return $value;
    }
    //lấy dữ liệu shipping orders
    public static function shippingOrder (){
        $status = 'Đang giao';
        $orders = DB::select("select * from users u, orders o where u.id = o.userId and orderStatus = '$status'");
        
        // ...
        $value = [];
        foreach ($orders as $key => $o) {
            $products = DB::select("select * from ordertrackhistory o, products p  where o.productid = p.id and  o.orderId = '$o->id'");
            $o->products = $products;
            array_push($value, $o);
        }
        return $value;
    }
    //lấy dữ liệu delivered orders
    public static function deliveredOrder (){
        $status = "Đã giao";
        $orders = DB::select("select * from users u, orders o where u.id = o.userId and orderStatus = '$status'");
        
        // ...
        $value = [];
        foreach ($orders as $key => $o) {
            $products = DB::select("select * from ordertrackhistory o, products p  where o.productid = p.id and  o.orderId = '$o->id'");
            $o->products = $products;
            array_push($value, $o);
        }
        return $value;
    }
    //update orders theo id
    public static function postUpdate($status, $id, $orderDate){
        $value = DB::table("orders")->where('id','=',$id)->update([
            'orderStatus' => $status,
            'orderDate' => $orderDate,
        ]);
        return $value;
    }
}
