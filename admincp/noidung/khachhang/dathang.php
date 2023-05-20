<table width="100%" border="1">
  <tr>
    <th width="10" height="50">ID</th>
    <th width="78">Username</th>
    <th width="78">Họ Tên</th>
    <th width="106">Số Điện Thoại</th>
    <th width="81">Địa chỉ</th>
    <th width="83">T/g Đặt</th>
    <th width="66">Chi Tiết</th>
    <th width="104">Trạng Thái</th>
  </tr>
  <?php 
  $sql="select*from giohang order by trangthai ASC";
  $query_sql=mysqli_query($connect,$sql);
  while($row_sql=mysqli_fetch_assoc($query_sql)){
  ?>
  <tr>
    <td height="26"><?php echo $row_sql['id_giohang'];?></td>
    <td><input disabled size="13" type="text" value="<?php echo $row_sql['username'];?>"/></td>
    <td><input disabled size="13" type="text" value="<?php echo $row_sql['hoten'];?>"/></td>
    <td><?php echo $row_sql['sodienthoai'];?></td>
    <td><input disabled size="13" type="text" value="<?php echo $row_sql['diachinhanhang'];?>"/></td>
    <td><?php echo $row_sql['ngaydat'];?></td>
    <td><a href="?xem=dathang&chitiet=<?php echo $row_sql['id_giohang'];?>">Chi Tiết</a></td>
    <td><?php 
	if($row_sql['trangthai']==0){
		echo "<font color='#FF0000'>Chưa Hoàn Thành</font>";
	}elseif($row_sql['trangthai']==2){
		echo "<font>Đã Hủy</font>";
	}else{
		echo "<font color='green'>Đã Hoàn Thành</font>";
	}
	?></td>
  </tr>
  <?php }?>
</table>
