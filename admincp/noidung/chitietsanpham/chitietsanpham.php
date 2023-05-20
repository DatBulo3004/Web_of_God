
<table id="loaisanpham">
	<tr>
		<th width="10">MaSP</th>
		<th>Tên Sản Phẩm</th>
		<th>Giá</th>
		<th>Hình Ảnh</th>
		<th>Đánh Giá</th>
		<th>Khuyến Mãi</th>
		<th>Tên Loại sản Phẩm</th>
		<th>Ngày Thêm</th>
		<th colspan="2">Hành Động</th>
	</tr>
	<?php
		if(isset($_GET['ac']))
		{
			$ac=$_GET['ac'];
		}
		if($ac=="suasp"){
				$get_idsua=$_GET['id'];
				$sql_sp="select*from chitietsp , loaisanpham where chitietsp.malsp=loaisanpham.malsp and masp='$get_idsua' ";
				$query_sp=mysqli_query($connect,$sql_sp);
				$row_sp=mysqli_fetch_assoc($query_sp);
				?>
			<tr>
				<td align="center"><?php echo $row_sp['masp'];?></td>
				<td align="center"><?php echo $row_sp['tensp'];?></td>
				<td align="center"><?php echo $row_sp['gia'];?></td>
				<td align="center"><img src="./noidung/chitietsanpham/upload/<?php echo $row_sp['hinhanh'];?>" width="70"/></td>
				<td align="center"><?php echo $row_sp['danhgia'];?></td>
				<td align="center"><?php echo $row_sp['khuyenmai'];?></td>
				<td align="center"><?php echo $row_sp['tenloaisanpham'];?></td>
				<td align="center"><?php echo $row_sp['ngaythem'];?></td>
				<td width="50"><a href="./?xem=chitietsanpham&ac=suasp&id=<?php echo $row_sp['masp'];?>">Sửa</a></td>
				<td width="50"><a href="./noidung/chitietsanpham/xuly.php?ac=xoasp&id=<?php echo $row_sp['masp'];?>">Xóa</a></td>
			</tr>
			<?php
		
		}
		else{
		
		if(isset($_GET['trang'])){
			$trang=$_GET['trang'];
		}else{
			$trang=1;
		}
		$sosanpham1trang=7;
		$min_limit=($trang*$sosanpham1trang)-$sosanpham1trang;
		$sql_sp="select*from chitietsp , loaisanpham where chitietsp.malsp=loaisanpham.malsp order by masp DESC limit {$min_limit},{$sosanpham1trang}";
		$query_sp=mysqli_query($connect,$sql_sp);
		while($row_sp=mysqli_fetch_assoc($query_sp)){
	?>
			<tr>
				<td align="center"><?php echo $row_sp['masp'];?></td>
				<td align="center"><?php echo $row_sp['tensp'];?></td>
				<td align="center"><?php echo $row_sp['gia'];?></td>
				<td align="center"><img src="./noidung/chitietsanpham/upload/<?php echo $row_sp['hinhanh'];?>" width="70"/></td>
				<td align="center"><?php echo $row_sp['danhgia'];?></td>
				<td align="center"><?php echo $row_sp['khuyenmai'];?></td>
				<td align="center"><?php echo $row_sp['tenloaisanpham'];?></td>
				<td align="center"><?php echo $row_sp['ngaythem'];?></td>
				<td width="50"><a href="./?xem=chitietsanpham&ac=suasp&id=<?php echo $row_sp['masp'];?>">Sửa</a></td>
				<td width="50"><a href="./noidung/chitietsanpham/xuly.php?ac=xoasp&id=<?php echo $row_sp['masp'];?>">Xóa</a></td>
			</tr>
		<?php
		}
		?>
</table>
<?php
	$sql="select*from chitietsp";
	$query_sql=mysqli_query($connect,$sql);
	$row_sql=mysqli_num_rows($query_sql);
	$sotrang=ceil($row_sql/$sosanpham1trang);
?>
<div id="trang">
<ul>
<li>Trang : </li>
	<?php
	for($i=1;$i<=$sotrang;$i++){
	echo "<a href='?xem=chitietsanpham&ac=themsp&trang={$i}'><li>{$i}</li></a>";
	}
	?>
</ul>
</div>
<?php
		}
		?>