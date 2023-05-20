<?php
$date=DATE("Y:m:d");
?>
<form action="./noidung/chitietsanpham/xuly.php?ac=themsp" method="POST" enctype="multipart/form-data">
<table id="themlsp">
	<tr>
		<th colspan="2">Sản Phẩm</th>
	</tr>
	<tr>
		<td>Tên Sản Phẩm</td>
		<td><input type="text" name="tensp"/></td>
	</tr>
	<tr>
		<td>Mã Sản Phẩm(MaSP)</td>
		<td><input type="text" name="masp" value="Auto" disabled/></td>
	</tr>
	<tr>
		<td>Giá</td>
		<td><input type="text" name="gia"/></td>
	</tr>
	<tr>
		<td>Hình Ảnh(không dấu)</td>
		<td><input type="file" name="hinhanh"/></td>
	</tr>
	<tr>
		<td>Mô Tả</td>
		<td><textarea rows="5" cols="40"  name="motasp"></textarea></td>
	</tr>
	<tr>
		<td>Đánh Giá</td>
		<td><input type="text" name="danhgia"/></td>
	</tr>
	<tr>
		<td>Khuyen Mai</td>
		<td><input type="text" name="khuyenmai"/></td>
	</tr>
	<tr>
		<td>Tên loại sản phẩm</td>
		<td>
		<select name="tenlsp">
		<?php
		$sql_telsp="select*from loaisanpham";
		$query_telsp=mysqli_query($connect,$sql_telsp);
		while($row_telsp=mysqli_fetch_assoc($query_telsp)){
		?>
		<option value=<?php echo $row_telsp['malsp'];?>>
		<?php echo $row_telsp['tenloaisanpham'];?>
		</option>
		<?php }?>
		</select>
		</td>
	</tr>
	<tr>
		<td>Ngày Thêm</td>
		<td><input type="text" name="ngaythem" value="<?php echo $date;?>" disabled/></td>
	</tr>
	<tr>
		<td colspan="2"  align="center"><input type="submit" name="btthemsp" value="Thêm Sản Phẩm"></td>
	</tr>
</table>
</form>