<?php
$get_idsua=$_GET['id'];
$sql_sualsp="select*from loaisanpham where malsp='{$get_idsua}'";
$query_sualsp=mysqli_query($connect,$sql_sualsp);
$row_sualsp=mysqli_fetch_assoc($query_sualsp);
?>

<form action="./noidung/loaisanpham/xuly.php?ac=sua&id=<?php echo $row_sualsp['malsp'];?>" method="POST">
<table id="themlsp">
	<tr>
		<th colspan="2">Sửa Loại Sản Phẩm</th>
	</tr>
	<tr>
		<td>Tên Loại Sản Phẩm</td>
		<td><input type="text" name="tenloaisp" value="<?php echo $row_sualsp['tenloaisanpham'];?>"></td>
	</tr>
	<tr>
		<td colspan="2"  align="center"><input type="submit" name="btsua" value="Sửa"></td>
	</tr>
</table>
</form>