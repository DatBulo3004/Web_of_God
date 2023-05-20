<div id="input">
<?php
if(isset($_GET['ac'])){
			$ac=$_GET['ac'];
		}else{
			$ac='';
		}
		if($ac=='them'){
			include("./noidung/loaisanpham/themloaisanpham.php");
		}
		if($ac=='sua'){
			?>
			<a href="?xem=loaisanpham&ac=them"><button>Thêm</button></a>
			<?php
			include("./noidung/loaisanpham/sualoaisanpham.php");
		}
		//chitietsanpham
		if($ac=='themsp'){
			include("./noidung/chitietsanpham/themsanpham.php");
		}
		if($ac=='suasp'){
			?>
			<a href="?xem=chitietsanpham&ac=themsp"><button>Thêm</button></a>
			<?php
			include("./noidung/chitietsanpham/suasanpham.php");
		}
	?>
</div>