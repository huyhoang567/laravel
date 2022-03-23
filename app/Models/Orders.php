<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{
    use HasFactory;
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

        $value = DB::select("select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.orderDate between '$from' and '$to'");
        return $value;
    }
    //lấy dữ liệu update orders theo id
    public static function updateOrder($id){
        $value = DB::select("select orders.id as id, name, contactno, shippingAddress, orderDate, orderStatus from users, orders where users.id = orders.userId and orders.id = $id");
        return $value;
    }
    //lấy dữ liệu pending orders
    public static function pendingOrder (){
        $status = "Delivered";
        $value = DB::select("select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.orderStatus!='$status' or orders.orderStatus is null");
        return $value;
    }
    //lấy dữ liệu delivered orders
    public static function deliveredOrder (){
        $status = "Delivered";
        $value = DB::select("select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.orderStatus='$status'");
        return $value;
    }
    //update orders theo id
    public static function postUpdate($status, $id){
        $value = DB:: update("update orders set orderStatus = '$status' where id = '$id'");
        return $value;
    }
}
