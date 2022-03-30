<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cập nhật đơn đặt hàng</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>
  @extends('admin.template.admintemplate')
  @section('update-orders')
<div style="margin-left:50px;">
  @foreach ($order as $row)
 <form action="update?id={{$row -> id}}" id="updateticket" method="post">
   @csrf
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <input type="text" name="orderDate" value="{{$row -> orderDate}}" style="display:none">
    <tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Cập nhật đơn đặt hàng!</b></div></td>
      
    </tr>
{{-- @foreach($ordertrackhistory as $row)
    <tr height="30">
      <td  class="fontkink1"><b>order Id:</b></td>
      <td  class="fontkink">{{$row -> orderId}}</td>
    </tr>
      <tr height="20">
      <td class="fontkink1" ><b>At Date:</b></td>
      <td  class="fontkink">{{$row -> postingDate}}</td>
    </tr>
    <tr height="20">
      <td  class="fontkink1"><b>Status:</b></td>
      <td  class="fontkink">{{$row -> status}}</td>
    </tr>
    <tr height="20">
      <td  class="fontkink1"><b>Remark:</b></td>
      <td  class="fontkink">{{$row -> remark}}</td>
    </tr>
    <tr>
      <td colspan="2"><hr /></td>
    </tr>
@endforeach --}}

<tr height="30">
  <td  class="fontkink1"><b>Tên khách hàng:</b></td>
  <td  class="fontkink">{{$row -> name}}</td>
</tr>
  <tr height="20">
  <td class="fontkink1" ><b>Số điện thoại:</b></td>
  <td  class="fontkink">{{$row -> contactno}}</td>
</tr>
<tr height="20">
  <td  class="fontkink1"><b>Địa chỉ nhận hàng:</b></td>
  <td  class="fontkink">{{$row -> shippingAddress}}</td>
</tr>
<tr height="20">
  <td  class="fontkink1"><b>Ngày đặt hàng:</b></td>
  <td  class="fontkink">{{$row -> orderDate}}</td>
</tr>
<tr>
  <td colspan="2"><hr /></td>
</tr>


    <tr height="50">
      <td class="fontkink1">Trạng thái: </td>
      <td  class="fontkink"><span class="fontkink1" >
        <select name="status" class="fontkink" required="required" >
          {{-- <option value="">Chọn trạng thái</option> --}}
                 <option value="Đang chờ" @if ($row -> orderStatus == 'Đang chờ') {{'selected'}} @endif >Đang chờ</option>
                 <option value="Đang giao" @if ($row -> orderStatus == 'Đang giao') {{'selected'}} @endif>Đang giao</option>
                  <option value="Đã giao" @if ($row -> orderStatus == 'Đã giao') {{'selected'}} @endif>Đã giao</option>
        </select>
        </span></td>
    </tr>
    {{-- <tr style=''>
      <td class="fontkink1" >Ghi chú:</td>
      <td class="fontkink" align="justify" ><span class="fontkink">
        <textarea cols="50" rows="7" name="remark"  required="required" ></textarea>
        </span></td>
    </tr> --}}
    <tr>
      <td class="fontkink1">&nbsp;</td>
      <td  >&nbsp;</td>
    </tr>
    <tr>
      <td class="fontkink">       </td>
      <td  class="fontkink"> <input type="submit" name="submit2"  value="Cập nhật"   size="40" style="cursor: pointer;" /> &nbsp;&nbsp;   
      <input name="Submit2" type="submit" class="txtbox4" value="Đóng cửa sổ" onClick="window.close()" style="cursor: pointer;"  /></td>
    </tr>
 
@endforeach
</table>
 </form>
</div>
@endsection
</body>
</html>

