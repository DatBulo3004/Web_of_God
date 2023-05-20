<h3 class="title">Khuyến Mãi</h3>
<?php
if(isset($_GET['trang'])){
	$trang=$_GET['trang'];
}else{
	$trang=1;
}
$sosanpham1trang=6;
$min_limit=($trang*$sosanpham1trang)-$sosanpham1trang;
$sql_khuyenmai="select * from chitietsp where khuyenmai > 0 order by khuyenmai DESC limit {$min_limit},{$sosanpham1trang} ";
$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
$row_sanphamtrang=mysqli_num_rows($query_khuyenmai);
while($row_sanpham=mysqli_fetch_assoc($query_khuyenmai)){
include("./sanpham/sanpham.php");
}
$sql_tatcaspkhuyenmai="select * from chitietsp where khuyenmai <> 0";
$query_tatcaspkhuyenmai=mysqli_query($connect,$sql_tatcaspkhuyenmai);
$row_trang=mysqli_num_rows($query_tatcaspkhuyenmai);
$sotrang=ceil($row_trang/$sosanpham1trang);
$tentrang="khuyenmai";
include("./bocuc/trang.php");
?>