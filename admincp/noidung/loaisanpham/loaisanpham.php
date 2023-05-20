
<table id="loaisanpham">
	<tr>
		<th width="10">MaLSP</th>
		<th>Tên Loại Sản Phẩm</th>
		<th colspan="2">Hành Động</th>
	</tr>
	<?php
		$sql_loaisp="select*from loaisanpham";
		$query_loaisp=mysqli_query($connect,$sql_loaisp);
		while($row_loaisp=mysqli_fetch_assoc($query_loaisp)){
	?>
			<tr>
				<td><?php echo $row_loaisp['malsp'];?></td>
				<td align="center"><?php echo $row_loaisp['tenloaisanpham'];?></td>
				<td width="50"><a href="./?xem=loaisanpham&ac=sua&id=<?php echo $row_loaisp['malsp'];?>">Sửa</a></td>
				<td width="50"><a href="./noidung/loaisanpham/xuly.php?ac=xoa&id=<?php echo $row_loaisp['malsp'];?>">Xóa</a></td>
			</tr>
		<?php
		}
		?>
</table>