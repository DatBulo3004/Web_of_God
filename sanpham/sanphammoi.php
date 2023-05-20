
<div class="title"><h3>Sản Phẩm Mới</h3></div>
<?php
if(isset($_GET['trang'])){
$trang=$_GET['trang'];
}else{
	$trang=1;
}
$sosanpham1trang=6;
$min_limit=($trang*$sosanpham1trang)-$sosanpham1trang;
$sql_spmoi="SELECT *FROM chitietsp ORDER BY masp DESC limit {$min_limit},{$sosanpham1trang} ";
//$sql_spmoi="select * from chitietsp";
$query_spmoi=mysqli_query($connect,$sql_spmoi);
$row_sanphamtrang=mysqli_num_rows($query_spmoi);
while($row_sanpham=mysqli_fetch_assoc($query_spmoi)){
include("./sanpham/sanpham.php");
}
$sql_sotrang="select*from chitietsp";
$query_sotrang=mysqli_query($connect,$sql_sotrang);
$row_trang=mysqli_num_rows($query_sotrang);
$sotrang=ceil($row_trang/$sosanpham1trang);
$tentrang="sanphammoi";
include("./bocuc/trang.php");
?>