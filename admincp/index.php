<?php
session_start();
if(isset($_SESSION['admin'])){
}else{
	header('Location: ../');
}
?>

<html>
<head>
<title>Trang ADMIN IDStyle</title>
<link rel="stylesheet" type="text/css" href="style/css.css"/>
</head>
<body>
<div id="container">
	
	<div id="thantrang">
		<?php
			@session_start();
			include("ketnoi.php");
			include("bocuc/logo.php");
			include("bocuc/menu.php");
			include("bocuc/noidung.php");
		?>
	</div>
</div>
</body>
</html>