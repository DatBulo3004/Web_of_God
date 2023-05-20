	<?php
	if (isset($_GET["xem"])) {
		$bien = $_GET["xem"];
	} else {
		$bien = "";
	}
	if ($bien == "sanphammoi") {
		$idtitle = 'Sản Phẩm Mới';
	}
	if ($bien == "khuyenmai") {
		$idtitle = "khuyến Mãi";
	}
	if ($bien == "loaisanpham") {
		$idtitle = "Loại Sản Phẩm";
	}
	if ($bien == "banchay") {
		$idtitle = "Bán Chạy";
	}
	if ($bien == "") {
		$idtitle = "IDStyle";
	}
	if ($bien == "taikhoan") {
		$idtitle = "Tài Khoản";
	}
	if ($bien == "dangnhap") {
		$idtitle = "Đăng Nhập";
	}
	if ($bien == "dangky") {
		$idtitle = "Đăng Ký";
	} else {
		$idtitle = "IDStyle";
	}
	?>
	<html>

	<head>
		<title><?php echo $idtitle; ?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/css.css?b" />
		<link rel="stylesheet" type="text/css" href="css/cssngoisao.css">
		<link rel="stylesheet" href="css/footer.css">
	</head>

	<body>
		<div id="container">
			<?php
			session_start();
			include("php/connect.php");
			include("bocuc/head.php"); ?>
			<div id="content">
				<?php
				if (isset($_SESSION['username'])) {
					if (isset($_GET["xem"])) {
						$bien = $_GET["xem"];
					} else {
						$bien = "";
					}
					if ($bien == "") {
						include("bocuc/thongbao.php");
					} else {
					};
				} else {
					include("bocuc/thongbao.php");
				}
				include("bocuc/noidung.php");
				if (isset($_SESSION['username'])) {
				} else {
					include("bocuc/formdangnhap.php");
				}
				include("bocuc/sitebar.php"); ?>
			</div>
			<?php
			include("bocuc/footer.php");
			?>
		</div>
	</body>

	</html>