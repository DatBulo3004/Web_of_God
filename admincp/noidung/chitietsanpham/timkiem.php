<?php
if(isset($_POST['bttim'])){
	$texttim=$_POST['texttim'];
	$sql="select*from chitietsp,loaisanpham where chitietsp.malsp=loaisanpham.malsp and masp='$texttim'";
	$query_sql=mysqli_query($connect,$sql);
	$row_sql=mysqli_num_rows($query_sql);

	if($row_sql>0){
	$thongbao="111111111";
	header("Location: index.php?xem=chitietsanpham&ac=suasp&id=$texttim");	
	}else{
			$thongbao="ID sai hoặc không đúng";
		}

	}else{
		$thongbao="";
	}

?>
		<div id="timkiem" style="clear:both;">
		<form action="" method="POST">
		<input type="text" placeholder="Nhập ID(MASP)" name="texttim"/>
		<input type="submit" name="bttim" value="Tìm"/>
		<?php echo $thongbao;?>
		</form>
		</div>