<?php
$host='localhost';
$userhost='root';
$passhost='';
$csdl='idstyle';
$connect=mysqli_connect($host,$userhost,$passhost,$csdl) or die("kết nối CSDL không thành công");
mysqli_query($connect,"SET NAMES 'UTF8'");
?>