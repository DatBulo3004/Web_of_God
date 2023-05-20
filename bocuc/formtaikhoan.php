<?php
include('php/connect.php');
if(isset($_SESSION['username'])){
	$user=$_SESSION['username'];
	$sql="SELECT * FROM member where username='$user'";
	$query=mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($query);
	$quyen=$row['quyen'];
if(isset($_POST['btadmin'])){
	header('Location: ./admincp/');
}else{
	$thongbao='';
}
	if($quyen=="Admin"){
		$_SESSION['admin']=$quyen;
		$btadmin='<input type="submit" name="btadmin" value="Trang Admin"/>';
	}else{
		$btadmin='';
	}
	
	
	
	
	if(isset($_POST['btdangxuat'])){
		session_destroy();
		header('Location: ./');
	}
	
}else{
	header('Location: ./');
}
?>
<div class="title"><h3>Chi Tiết Tài Khoản</h3></div>
<div id="formtaikhoan">
<p>Tài khoản : <?php echo $_SESSION['username']?></p>
<p>Quyền hạn : <?php echo $quyen?></p>
<p>Email : <?php echo $row['email']?></p>
<p>Giới tính : <?php echo $row['gioitinh']?></p>
<form action="" method="POST">
<input type="submit" name="btdangxuat" value="Đăng Xuất"/>
<?php echo $btadmin;?>
</form>
<?php echo $thongbao;?>
</div>
