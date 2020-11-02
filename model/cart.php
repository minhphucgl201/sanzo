<?php  
	include_once ('connect.php');
	function addToOrder($fname,$add,$email,$phone,$ngay)
{
  $query="insert into donhang(hoten,diachi,email,dienthoai,ngaydat)
  values('$fname','$add','$email','$phone','$ngay')";
  $lastId = executeReturnID($query);
  return $lastId;//tra ve ma don hang moi vua them
}
function addToOrderDetail($madh)
{
  foreach ($_SESSION['carts'] as $item) 
  {
    $masp=$item['id'];
    $sl=$item['quantity'];
    $query="insert into chitietdonhang(madh,masp,soluong)
    values('$madh','$masp','$sl')";
    $STH = execute($query);
  }
}

?>