<div class="title"><h3>Sản Phẩm Tìm Thấy</h3></div>
<?php
if(isset($_GET['trang'])){
	$trang=$_GET['trang'];
}else{
	$trang=1;
}
$sosanpham1trang=6;
if(isset($_POST['tim'])){
$_SESSION['timkiem']=$_POST['tim'];
}
$min_limit=($trang*$sosanpham1trang)-$sosanpham1trang;
$sql="select*from chitietsp where tensp LIKE '%{$_SESSION['timkiem']}%' limit {$min_limit},{$sosanpham1trang}";
$query_sql=mysqli_query($connect,$sql);
$row_sanphamtrang=mysqli_num_rows($query_sql);
$sql_timkiem="select*from chitietsp where tensp LIKE '%{$_SESSION['timkiem']}%'";
$query_timkiem=mysqli_query($connect,$sql_timkiem);
$row_trang=mysqli_num_rows($query_timkiem);
?>
<div id="ketqua" style="float:left;clear:both;">Có <?php echo $row_trang;?> Kết Quả cho '<?php echo $_SESSION['timkiem'];?>'</div><br>
<?php
while($row_sanpham=mysqli_fetch_assoc($query_sql)){
	include("./sanpham/sanpham.php");
}
$sotrang=ceil($row_trang/$sosanpham1trang);
$tentrang="timkiem";
include("./bocuc/trang.php");
?>