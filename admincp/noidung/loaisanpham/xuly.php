<?php
include("../../ketnoi.php");
session_start();
if(isset($_SESSION['admin'])){
}else{
	header('Location: ../');
}
$id_malsp=$_GET['id'];
$tenloaisanpham=$_POST['tenloaisp'];
$maloaisp=$_POST['maloaisp'];
if(isset($_GET['ac'])){
	$ac=$_GET['ac'];
}else{
	$ac='';
}
if($ac=='xoa'){
	$sql_xoa="DELETE from loaisanpham where malsp='{$id_malsp}'";
	mysqli_query($connect,$sql_xoa);
	header("Location: ../../?xem=loaisanpham&ac=them");
	}
if($ac=='sua'){
	$sql_sua="UPDATE loaisanpham SET tenloaisanpham='{$tenloaisanpham}' WHERE malsp='{$id_malsp}'";
	mysqli_query($connect,$sql_sua);
	header("Location: ../../?xem=loaisanpham&ac=sua&id={$id_malsp}");
}

if($ac=='them'){
	$sql_themloaisp="INSERT INTO loaisanpham ( tenloaisanpham) VALUE ('{$tenloaisanpham}')";
	mysqli_query($connect,$sql_themloaisp);
	header("Location: ../../?xem=loaisanpham&ac=them");
}

?>