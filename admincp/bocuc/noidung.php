<div id="noidung">
	<?php
		if(isset($_GET['xem'])){
			$bien=$_GET['xem'];
		}else{
			$bien='';
		}
		if($bien=='loaisanpham'){
			include("./bocuc/input.php");
			include("./bocuc/output.php");
		}
		elseif($bien=='chitietsanpham'){
			include("./bocuc/input.php");
			include("./noidung/chitietsanpham/timkiem.php");
			include("./bocuc/output.php");
		}
		if($bien=='dathang' && isset($_GET['chitiet'])){
			
			include("./noidung/khachhang/chitietdathang.php");
			
		}elseif($bien=='dathang'){
			
			include("./noidung/khachhang/dathang.php");
			
		}
		
		//if(isset($_POST['bttim']) || $bien=='timkiem'){
			//include("./bocuc/input.php");
			//include("./noidung/chitietsanpham/timkiem.php");
		//}
		
	?>
	
</div>