<?php 
	$sql="select*from giohang where trangthai='0'";
	$query_sql=mysqli_query($connect,$sql);
	$row_sql=mysqli_num_rows($query_sql);
?>
<div id="menu">
			<ul>
			<h4>
				<a href="../"><li>Trang Chủ IDStyle</li></a>
				<a href="?xem=loaisanpham&ac=them"><li>Loại Sản Phẩm</li></a>
				<a href="?xem=chitietsanpham&ac=themsp"><li>Chi Tiết Sản Phẩm</li></a>
				<a href="?xem=dathang"><li>Đặt Hàng (<font color="red"><?php echo $row_sql;?></font>)</li></a>
			</h4>
			</ul>
</div>