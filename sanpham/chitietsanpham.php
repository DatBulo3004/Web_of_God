

<?php
$get_id=$_GET['id'];
$sql="select*from chitietsp where masp='{$get_id}'";
$query_sql=mysqli_query($connect,$sql);
$row_sql=mysqli_fetch_assoc($query_sql);
?>
<div id="tbchitiet" style="margin:10 0 10 20;">
<table border="0" id="tbchitiet" align="center"  width="760">
	<tr>
	<th colspan="2">Mã Sản Phẩm : <?php echo $row_sql['masp'];?> </th>
	</tr>
	<tr>
	<td rowspan="4" width="350"><img src=".\admincp\noidung\chitietsanpham\upload\<?php echo $row_sql['hinhanh'];?>"width="300"></td>
	<td align="center"><h3><?php echo $row_sql['tensp'];?></h3></td>
	</tr>
	<tr>
	<td align="center"><h3><?php echo number_format($row_sql['gia']);?>đ</h3></td>
	</tr>
	<?php if($row_sql['khuyenmai']<=0){
		$khuyenmai="0";
	}else{
		$khuyenmai=$row_sql['khuyenmai'];
	}
	?>
	<tr>
	<td align="center">Khuyến Mãi : <?php echo $khuyenmai;?> % </td>
	</tr>
	<tr>
	<td align="center">Đánh Giá : <?php echo $row_sql['danhgia'];?> </td>
	</tr>
	<tr>
	<td colspan="2">Mô tả : <?php echo $row_sql['mota'];?></td>
	</tr>
	<tr>
	<td align="center" colspan="2"><a href="?xem=giohang&id=<?php echo $row_sql['masp'];?>"><button>Thêm vào giỏ hàng</button></a></td>
	</tr>
</table>
</div>