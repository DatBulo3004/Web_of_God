<?php
if(isset($_SESSION['username']) && isset($_SESSION['giohang'])){
if(isset($_POST['bttttt'])){
	$hoten=$_POST['hoten'];
	$Sdt=$_POST['sodienthoai'];
	$diachi=$_POST['diachi'];
	if($hoten==""||$Sdt==""||$diachi==""){
		$thongbao="Nhập Đầy Đủ Thông Tin";
	}else{
		if(!is_numeric($Sdt)){
			$thongbao="SDT Không Được Chứa Ký Tự";
		}else{
			$date=DATE("Y:m:d");
			//them gio hang
			$username=$_SESSION['username'];
			$sql_giohang="insert into giohang (ngaydat,username,hoten,sodienthoai,diachinhanhang) VALUES('{$date}','{$username}','{$hoten}','{$Sdt}','{$diachi}')";
			$query_giohang=mysqli_query($connect,$sql_giohang);
			//lay id_giohang= hang lon nhat
			$sql_idgiohang="select max(id_giohang) from giohang";
			$query_idgiohang=mysqli_query($connect,$sql_idgiohang);
			$row_idgiohang=mysqli_fetch_assoc($query_idgiohang);
			$idgiohang=$row_idgiohang['max(id_giohang)'];
			//them chitietgiohang
			$dem=count($_SESSION['giohang']);
			for($i=0;$i<$dem;$i++){
				$sql_sanpham="select*from chitietsp where masp='{$_SESSION['giohang'][$i]['id']}'";
				$query_sanpham=mysqli_query($connect,$sql_sanpham);
				$row_sanpham=mysqli_fetch_assoc($query_sanpham);
				$masp=$row_sanpham['masp'];
				$gia=$row_sanpham['gia'];
				$sql_chitietgiohang="insert into chitietgiohang (id_giohang,masp,soluong,gia) 	VALUES('{$idgiohang}','{$masp}','{$_SESSION['giohang'][$i]['soluong']}','{$gia}')";
				$query_chitietgiohang=mysqli_query($connect,$sql_chitietgiohang);
			}
			$thongbao="Dat hang thanh cong";
			unset($_SESSION['giohang']);
		}
	}
}else{
	$thongbao="";
}
?>






<div id="thongtinthanhtoan" style="margin:auto;"/>
<form action="?xem=thongtinthanhtoan" method="POST">
<table width="633" border="0" cellpadding="0" align="center">
  <tr>
    <th colspan="2" align="center" >Thông Tin Thanh Toán</th>
  </tr>
  <tr>
    <td width="141">(*)Họ Tên :</td>
    <td width="480"><input size="50" type="text" name="hoten" placeholder="Họ Tên"/></td>
  </tr>
  <tr>
    <td>(*)Số Điện Thoại : </td>
    <td><input size="50" type="text" name="sodienthoai" placeholder="Số Điện Thoại" maxlength="12"/></td>
  </tr>
  <tr>
    <td height="252">(*)Địa Chỉ</td>
    <td><textarea name="diachi" style="margin: 0px; width: 384px; height: 256px;" placeholder="Địa Chỉ Nhận Hàng"></textarea></td>
  </tr>
    <tr>
    <td height="41" colspan="2" align="center" ><?php echo $thongbao;?></td>
  </tr>
  <tr>
    <td height="41" colspan="2" align="center" ><input type="submit" name="bttttt" value="Đặt Hàng"/></td>
  </tr>
</table>
</form>
</div>
<?php }else{
	header("Location: index.php?xem=dangky");
}
?>