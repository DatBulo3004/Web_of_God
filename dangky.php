<?php
include('php/connect.php');
if (isset($_GET["xem"])) {
	$bien = $_GET["xem"];
} else {
	$bien = "";
}
if ($bien == "dangky") {
} else {
	header('location: index.php');
}
if (isset($_SESSION['username'])) {
	header('location: index.php');
	$thongbao = "";
} else {
	if (isset($_POST["btdangky"])) {
		if ($_POST["user"] == "" || $_POST["pass"] == "" || $_POST["email"] == "") {
			$thongbao = "<center>Nhập đầy đủ</center>";
		} else {
			$user = $_POST["user"];
			$pass = $_POST["pass"];
			$email = $_POST["email"];
			$gioitinh = $_POST["chon"];
			$gioitin1 = "";
			if ($gioitinh == 'nam') {
				$gioitinh1 = "Nam";
			} else if ($gioitinh == 'nu') {
				$gioitinh1 = 'Nu';
			}
			$sql = "SELECT * from member where username='$user'";
			$query = mysqli_query($connect, $sql);
			if (mysqli_num_rows($query) > 0) {
				//kt xem có user hoặc email chưa
				$thongbao = "<center>Username hoặc Email<br> đã tồn tại</center>";
			} else {
				//luu vào db
				$sql = "InSERT INTO member (username,password,email,gioitinh) value ('$user','$pass','$email','$gioitinh1')";
				mysqli_query($connect, $sql);
				$thongbao = "Đăng Ký Thành Công";
			}
		}
	} else {
		$thongbao = "";
	}
}
?>
<div id="formdangnhap">
	<div id="formdangnhap1">
		<form action="index.php?xem=dangky" method="post">
			<table class="tbdn">
				<tr>
					<td>
						<h2>Đăng Kí</h2>
					</td>
				</tr>
				<tr>
					<td><input type="text" name="user" placeholder="Tên Đăng Nhập" /></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Mật Khẩu">
					<td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Email@domain">
					<td>
				</tr>
				<tr>
					<td>Nam<input type="radio" name="chon" value="nam" checked>Nữ<input type="radio" name="chon" value="nu">
					<td>
				</tr>
				<tr>
					<td><?php echo $thongbao ?>
					<td>
				</tr>
				<tr>
					<td><input type="submit" name="btdangky" Value="Đăng Ký" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>