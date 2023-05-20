<?php
$date=DATE("Y:m:d");
if(isset($_GET['id'])){
$get_idsua=$_GET['id'];
}else if(isset($_SESSION['timkiemadmin'])){
	$get_idsua=$_SESSION['timkiemadmin'];
}
if(isset($get_idsua)){
$sql_suasp="select*from chitietsp where masp='{$get_idsua}'";
$query_suasp=mysqli_query($connect,$sql_suasp);
$row_suasp=mysqli_fetch_assoc($query_suasp);
?>
<form action="./noidung/chitietsanpham/xuly.php?ac=suasp&id=<?php echo $row_suasp['masp'];?>" method="POST" enctype="multipart/form-data">
<table id="themlsp">
	<tr>
		<th colspan="2">Sản Phẩm</th>
	</tr>
	<tr>
		<td>Tên Sản Phẩm</td>
		<td><input type="text" name="tensp" value="<?php echo $row_suasp['tensp']?>"/></td>
	</tr>
	<tr>
		<td>Mã Sản Phẩm(MaSP)</td>
		<td><input type="text" name="masp" value="<?php echo $row_suasp['masp']?>" disabled/></td>
	</tr>
	<tr>
		<td>Giá</td>
		<td><input type="text" name="gia" value="<?php echo $row_suasp['gia']?>"/></td>
	</tr>
	<tr>
		<td>Hình Ảnh(Không dấu)</td>
		<td><img src="./noidung/chitietsanpham/upload/<?php echo $row_suasp['hinhanh']?>" width="200"></br><input type="file" name="hinhanh"/></td>
	</tr>
	<tr>
		<td>Mô Tả</td>
		<td><textarea rows="5" cols="40"  name="motasp"><?php echo $row_suasp['mota']?></textarea></td>
	</tr>
	<tr>
		<td>Đánh Giá</td>
		<td><input type="text" name="danhgia" value="<?php echo $row_suasp['danhgia']?>"/></td>
	</tr>
	<tr>
		<td>Khuyen Mai</td>
		<td><input type="text" name="khuyenmai" value="<?php echo $row_suasp['khuyenmai']?>"/></td>
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
		<?php
		if($row_suasp['malsp']==$row_telsp['malsp']){
			?>
				
			<option selected="" value="<?php echo $row_telsp['malsp'];?>">
				<?php echo $row_telsp['tenloaisanpham'];?>
			</option>
			<?php
		}else{
		?>
			<option value="<?php echo $row_telsp['malsp'];?>">
				<?php echo $row_telsp['tenloaisanpham'];?>
			</option>
		<?php }}?>
		</select>
		</td>
	</tr>
	<tr>
		<td>Ngày Thêm</td>
		<td><input type="text" name="ngaythem" value="<?php echo $date;?>" disabled/></td>
	</tr>
	<tr>
		<td colspan="2"  align="center"><input type="submit" name="btsuasp" value="Sửa Sản Phẩm"></td>
	</tr>
</table>
</form>
<?php }?>