<?php
include("../../ketnoi.php");
session_start();
if(isset($_SESSION['admin'])){
}else{
	header('Location: ../');
}
$id_msp=$_GET['id'];
if(isset($_GET['ac'])){
	$ac=$_GET['ac'];
}else{
	$ac='';
}
if($ac=='xoasp'){
	$sql_layanh="select * from chitietsp where masp='{$id_msp}'";
	$query_layanh=mysqli_query($connect,$sql_layanh);
	$row_layanh=mysqli_fetch_assoc($query_layanh);
	//$hinhanhcu = "./noidung/chitietsanpham/upload/{$hinhanh}"; // Địa chỉ file ảnh cần xóa
	unlink("./upload/{$row_layanh['hinhanh']}");
	$sql_xoa="DELETE from chitietsp where masp='{$id_msp}'";
	mysqli_query($connect,$sql_xoa);
	header("Location: ../../?xem=chitietsanpham&ac=themsp");
	}else{
$tensanpham=$_POST['tensp'];
$gia=$_POST['gia'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$mota=$_POST['motasp'];
$danhgia=$_POST['danhgia'];
$khuyenmai=$_POST['khuyenmai'];
$tenlsp=$_POST['tenlsp'];
$path = "./upload/";
$date=DATE("Y:m:d");



if($ac=='suasp'){
 if($_FILES['file']['name'] != NULL){	
$sql_layanh="select * from chitietsp where masp='{$id_msp}'";
$query_layanh=mysqli_query($connect,$sql_layanh);
$row_layanh=mysqli_fetch_assoc($query_layanh);
	//$hinhanhcu = "./noidung/chitietsanpham/upload/{$hinhanh}"; // Địa chỉ file ảnh cần xóa
	unlink("./upload/{$row_layanh['hinhanh']}");
	move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	$sql_sua="UPDATE chitietsp SET tensp='{$tensanpham}',gia='{$gia}',hinhanh='{$hinhanh}',mota='{$mota}',danhgia='{$danhgia}',khuyenmai='{$khuyenmai}',malsp='{$tenlsp}' WHERE masp='{$id_msp}'";
	mysqli_query($connect,$sql_sua);
 }else{
	 $sql_sua="UPDATE chitietsp SET tensp='{$tensanpham}',gia='{$gia}',mota='{$mota}',danhgia='{$danhgia}',khuyenmai='{$khuyenmai}',malsp='{$tenlsp}' WHERE masp='{$id_msp}'";
	mysqli_query($connect,$sql_sua);
 }
 header("Location: ../../?xem=chitietsanpham&ac=suasp&id={$id_msp}");
}

if($ac=='themsp'){
	move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	$sql_themsp="INSERT INTO chitietsp (tensp,gia,hinhanh,mota,danhgia,khuyenmai,malsp,ngaythem) VALUE ('{$tensanpham}','{$gia}','{$hinhanh}','{$mota}','{$danhgia}','{$khuyenmai}','{$tenlsp}','{$date}')";
	mysqli_query($connect,$sql_themsp) or die ("không thể thêm sp");
	header("Location: ../../?xem=chitietsanpham&ac=themsp");
}
	}
?>