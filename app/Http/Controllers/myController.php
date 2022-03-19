<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class myController extends Controller
{
    public function LuuSanPham(Request $request){
//         dd($request->all());
        $message = [];
        $validator = Validator::make($request->all(),[
            'masp' => 'required | max:10 | unique:products,"ProductID"',
            'tensp' => 'required | max:100 | unique:products,"ProductName"',
            'dvt' => 'required | max:20',
            'giasp' => 'required | numeric',
            'hinhanh' => 'required | mimes:jpeg, jpg, png, gif | max:1024'
        ],$message);
        if ($validator -> fails()){
            return redirect('nhaphang') -> withErrors($validator) -> withInput();
        } else {
            $masp = $request -> input('masp');
            $dd = mb_strtolower ($request -> input('tensp'), 'UTF-8');
            $tensp = mb_convert_case ($dd,MB_CASE_TITLE).PHP_EOL;
            $dvt = $request -> input('dvt');
            $giasp = $request -> input('giasp');
            $hinhanh = $request ->file('hinhanh');
            $storedPath = $hinhanh -> move('resources/views/images/product',time()."_".$hinhanh -> getClientOriginalName());
            DB::insert('insert into products (ProductId, ProductName, Unit, Cost, Image) values(?, ?, ?, ?, ?)', [$masp, $tensp, $dvt, $giasp, $hinhanh -> getClientOriginalName()]);

            return view('nhaphang',['mess' => 'Lưu thành công']);
        }
    }
    public function LuuThanhVien(Request $request){
//             dd($request->all());
        $message = [];
        $validator = Validator::make($request->all(),[
            'matv' => 'required | max:10 | unique:members,"MemberID"',
            'tentv' => 'required | max:100',
            'sdt' => 'required | digits_between:10,11 | unique:members,"Tel"',
            'email' => 'required | email | unique:members,"Email"',
            'diachi' => 'required | max:100',
            'hinhanh' => 'required | mimes:jpeg, jpg, png, gif | max:1024'
        ],$message);
        if ($validator -> fails()){
            return redirect('themthanhvien') -> withErrors($validator) -> withInput();
        } else {
            $matv = $request -> input('matv');
            $dd = mb_strtolower ($request -> input('tentv'), 'UTF-8');
            $tentv = mb_convert_case ($dd,MB_CASE_TITLE).PHP_EOL;
            $sdt = $request -> input('sdt');
            $email = $request -> input('email');
            $diachi = $request ->input('diachi');
            $ngaythamgia = date("Y/m/d");
            $hinhanh = $request -> file('hinhanh');
            $storedPath = $hinhanh -> move('resources/views/images/member',time()."_".$hinhanh -> getClientOriginalName());
            DB::insert('insert into members (MemberID, MemberName, Tel, Email, Address, JoinDate, Image) values(?, ?, ?, ?, ?, ?, ?)', [$matv, $tentv, $sdt, $email, $diachi, $ngaythamgia, $hinhanh -> getClientOriginalName()]);

            return view('themthanhvien',['mess' => 'Lưu thành công']);
        }
    }
    public function LuuHoaDon(Request $request){
//             dd($request->all());
        $message = [];
        $validator = Validator::make($request->all(),[
            'mahd' => 'required | max:10 | unique:invoices,"InvoiceNo"',
            'ngayhd' => 'required | date',
            'matv' => 'required | max:10 | exists:members,"MemberID"',
            'masp' => 'required | max:10 | exists:products,"ProductID"',
        ],$message);
        if ($validator -> fails()){
            return redirect('themhoadon') -> withErrors($validator) -> withInput();
        } else {
            $mahd = $request -> input('mahd');
            $ngayhd = $request -> input('ngayhd');
            $matv = $request -> input('matv');
            $masp = $request -> input('masp');
            DB::insert('insert into invoices (InvoiceNo, InvoiceDate, MemberID, ProductID) values(?, ?, ?, ?)', [$mahd, $ngayhd, $matv, $masp]);

            return view('themhoadon',['mess' => 'Lưu thành công']);
        }
    }
}
