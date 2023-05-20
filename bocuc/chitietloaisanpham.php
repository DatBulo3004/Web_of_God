<div class="title">
	<h3>Tất Cả Sản Phẩm</h3>
</div>
<?php
if (isset($_GET['trang'])) {
	$trang = $_GET['trang'];
} else {
	$trang = 1;
}
$sosanpham1trang = 6;
$min_limit = ($trang * $sosanpham1trang) - $sosanpham1trang;
$sql_chitietlsp = "select*from chitietsp where malsp='$_GET[id]' order by masp DESC limit {$min_limit},{$sosanpham1trang} ";
$query_chitietlsp = mysqli_query($connect, $sql_chitietlsp);
$row_sanphamtrang = mysqli_num_rows($query_chitietlsp);
while ($row_sanpham = mysqli_fetch_assoc($query_chitietlsp)) {
	include("./sanpham/sanpham.php");
}
$sql = "select*from chitietsp where malsp='$_GET[id]'";
$query = mysqli_query($connect, $sql);
$row_trang = mysqli_num_rows($query);
$sotrang = ceil($row_trang / $sosanpham1trang);
$tentrang = "chitietloaisanpham";
include("./bocuc/trang.php");
?>