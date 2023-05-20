
<div class="title"><h3>Tất Cả Sản Phẩm</h3></div>
<?php 
if(isset($_GET['trang'])){
$trang=$_GET['trang'];
}else{
	$trang=1;
}
$sosanpham1trang=6;
$min_limit=($trang*$sosanpham1trang)-$sosanpham1trang;
$sql_tatcasp="select*from chitietsp limit {$min_limit},{$sosanpham1trang} ";
$query_tatcasp=mysqli_query($connect,$sql_tatcasp);
$row_sanphamtrang=mysqli_num_rows($query_tatcasp);
while($row_sanpham=mysqli_fetch_assoc($query_tatcasp)){
include("./sanpham/sanpham.php");
}
$sql_sotrang="select*from chitietsp";
$query_sotrang=mysqli_query($connect,$sql_sotrang);
$row_trang=mysqli_num_rows($query_sotrang);
$sotrang=ceil($row_trang/$sosanpham1trang);
$tentrang="tatcasanpham";
include("./bocuc/trang.php");
?>
