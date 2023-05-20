<head>
<link rel="stylesheet" type="text/css" href="css/csstitle.css"/>
</head>
<div class="title"><h3>Bán Chạy</h3></div>
<?php

if(isset($_GET['trang'])){
	$trang=$_GET['trang'];
}else{
	$trang=1;
}
$sosanpham1trang=6;
$min_limit=($trang*$sosanpham1trang)-$sosanpham1trang;
$sql_khuyenmai="select sum(soluong),masp from chitietgiohang group by masp,gia limit {$min_limit},{$sosanpham1trang} ";
//$sql_chitietgiohang="select sum(soluong),masp,gia from chitietgiohang where id_giohang='{$id}' group by masp,gia";
$query_chitietgiohang=mysqli_query($connect,$sql_khuyenmai);
$row_sanphamtrang=mysqli_num_rows($query_chitietgiohang);

while($row_sanpham=mysqli_fetch_assoc($query_chitietgiohang)){
include("./sanpham/sanpham.php");
}
$sql_tatcaspkhuyenmai="select sum(soluong),masp from chitietgiohang group by masp,gia";
$query_tatcaspkhuyenmai=mysqli_query($connect,$sql_tatcaspkhuyenmai);
$row_trang=mysqli_num_rows($query_tatcaspkhuyenmai);
$sotrang=ceil($row_trang/$sosanpham1trang);
$tentrang="banchay";
include("./bocuc/trang.php");
?>