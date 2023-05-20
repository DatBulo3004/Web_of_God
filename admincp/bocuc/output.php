<div id="output">
		<?php
			
		if(isset($_GET['xem'])){
			$bien=$_GET['xem'];
		}else{
			$bien='';
		}
		if($bien=='loaisanpham'){
			include("./noidung/loaisanpham/loaisanpham.php");
		}
		if($bien=='chitietsanpham'){
			include("./noidung/chitietsanpham/chitietsanpham.php");
		}
		?>
</div>