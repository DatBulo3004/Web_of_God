<?php
	include('php/connect.php');
	if(!isset($_SESSION)) 
    { 
        session_start(); 
		
    }
    else
    {
        session_destroy();
        session_start(); 
    }
	if(isset($_GET["xem"])){
			$bien=$_GET["xem"];
				}else{
					$bien="";
				}
	if($bien=="dangnhap"){
		
	}else{header('location: index.php');}
	if(isset($_SESSION['username'])){
		header('location: index.php');
		$thongbao="";
	}else{
	if(isset($_POST["btdangnhap"]))
	{
		if($_POST["user"]=="" || $_POST["pass"]==""){
			$thongbao="<center>Nhập đầy đủ</center>";
		}else{
			$user=$_POST["user"];
			$pass=$_POST["pass"];
			$sqldangnhap="select*from member where username='$user' and password='$pass'";
			$query1=mysqli_query($connect,$sqldangnhap);
			if(mysqli_num_rows($query1)<1){
				//kt xem có user
				$thongbao="<center>Không có Username</center>";
			}else{
				$_SESSION['username']=$user;
				header('Location: index.php?xem=taikhoan');
			}
		}
	}else{
		$thongbao="";
	}if(isset($_POST["btquadangky"])){
		header('location: index.php?xem=dangky');
	}
	}
?>

				<div id="formdangnhap">
					<div id="formdangnhap1">
						<form action="index.php?xem=dangnhap" method="post">
						<table class="tbdn">
						<tr>
							<td><h2>Đăng Nhập</h2></td>
							</tr>
							<tr>
							<td><input type="text" name="user" placeholder="Tên Đăng Nhập"/></td>
							</tr>
							<tr>
							<td><input type="password" name="pass" placeholder="Mật Khẩu"><td>
							</tr>
							<tr>
							<td><?php echo $thongbao?><td>
							</tr>
							<tr>
							<td><input type="submit" name="btdangnhap" Value="Đăng Nhập"/>or<input type="submit" name="btquadangky" Value="Đăng Ký"/></td>
							</tr>
							</table>
						</form>
					</div>
				</div>
