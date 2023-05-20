<?php
$id=$_GET['chitiet'];
$sql="select*from giohang,chitietgiohang where giohang.id_giohang=chitietgiohang.id_giohang and giohang.id_giohang='{$id}'";
$query_sql=mysqli_query($connect,$sql);
$row_sql=mysqli_fetch_assoc($query_sql);

if(isset($_POST["capnhap"])){
$sql_update="UPDATE giohang SET hoten='{$_POST['hoten']}',sodienthoai='{$_POST['sodienthoai']}',diachinhanhang='{$_POST['diachinhanhang']}',trangthai='{$_POST['trangthai']}',ghichu='{$_POST['ghichu']}' WHERE id_giohang='{$id}'";
mysqli_query($connect,$sql_update);
header("LOCATION: ?xem=dathang&chitiet={$id}");
}
?>
<form action="" method="post">
<table width="100%" border="1">
  <tr>
    <th colspan="3">Chi tiết dặt hàng mã : <?php echo $id;?></th>
  </tr>
  <tr>
    <td width="130">Username</td>
    <td width="563" colspan="2"><?php echo $row_sql['username'];?></td>
  </tr>
  <tr>
    <td>Họ tên</td>
    <td colspan="2"><input type="text" name="hoten" value="<?php echo $row_sql['hoten'];?>"/></td>
  </tr>
  <tr>
    <td>Số điện thoại</td>
    <td colspan="2" ><input type="text" name="sodienthoai" value="<?php echo $row_sql['sodienthoai'];?>"/></td>
  </tr>
  <tr>
    <td>Địa chỉ nhận</td>
    <td colspan="2" name=""><textarea cols="50" rows="6" name="diachinhanhang"><?php echo $row_sql['diachinhanhang'];?></textarea></td>
  </tr>
  <tr>
    <td>Thời gian đặt</td>
    <td colspan="2"><?php echo $row_sql['ngaydat'];?></td>
  </tr>
  <tr>
    <td>Ghi chú (Admin)</td>
    <td colspan="2"><textarea cols="50" rows="6" name="ghichu"><?php echo $row_sql['ghichu'];?></textarea></td>
  </tr>
  <tr>
    <td>Trạng Thái</td>
    <td colspan="2">
	<select name="trangthai">
	<?php
	for($i=0;$i<3;$i++){
		if($i==0){
			$trangthai="Chưa Hoàn Thành";
		}elseif($i==2){
			$trangthai="Đã Hủy";
		}else{
			$trangthai="Đã Hoàn Thành";
		}
		if($i==$row_sql['trangthai']){
	?>
	<option selected value="<?php echo $i;?>"><?php echo $trangthai;?></option>
	<?php }else{?>
	<option value="<?php echo $i;?>"><?php echo $trangthai;?></option>
	<?php }}?>
	</select>
	</td>
  </tr>
  <tr>
    <td align="center" height="23" colspan="3"><input type="submit" value="Cập Nhập" name="capnhap"/></td>
  </tr>
</table></form>
<table width="100%" border="1">
  <tr>
    <th colspan="5">Chi tiết giỏ hàng</th>
  </tr>
  <tr>
    <td width="12%">Mã SP</td>
    <td width="50%">Tên sản phẩm</td>
    <td width="8%">Số lượng </td>
    <td width="14%">Giá 1 SP</td>
    <td width="16%">Tổng tiền sp</td>
  </tr>
  <?php 
  $sql_chitietgiohang="select sum(soluong),masp,gia from chitietgiohang where id_giohang='{$id}' group by masp,gia";
  $query_chitietgiohang=mysqli_query($connect,$sql_chitietgiohang);
  $tongtien=0;
  while($row_chitietgiohang=mysqli_fetch_assoc($query_chitietgiohang)){?>
  <tr>
    <td><?php echo $row_chitietgiohang['masp'];?></td>
	<?php
		$sql_tensp="select*from chitietsp where masp='{$row_chitietgiohang['masp']}'";
		$query_tensp=mysqli_query($connect,$sql_tensp);
		$row_tensp=mysqli_fetch_assoc($query_tensp);
	?>
    <td height="23"><?php echo $row_tensp['tensp'];?></td>
    <td><?php echo $row_chitietgiohang['sum(soluong)'];?></td>
    <td><?php echo number_format($row_chitietgiohang['gia'],0,",",".");?></td>
    <td><?php $tongtiensp=($row_chitietgiohang['gia']*$row_chitietgiohang['sum(soluong)']);echo number_format($tongtiensp,0,",",".");?></td>
	<?php $tongtien=$tongtien+$tongtiensp;?>
  </tr>
  <?php }?>
  <tr>
    <td height="23" colspan="5">Tổng tiền giỏ hàng : <?php echo number_format($tongtien,0,",",".");?></td>
  </tr>
</table>
