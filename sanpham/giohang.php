<div class="title"><h3>Giỏ hàng</h3></div>
<?php
//kiểm tra tồn tại biến ac

if(isset($_GET['ac'])){
	$id=$_GET['id'];
	$ac=$_GET['ac'];
	$dem=count($_SESSION['giohang']);
	if($ac=='tru'){
		for($i=0;$i<$dem;$i++){
					if($_SESSION['giohang'][$i]['id']==$id){
					$_SESSION['giohang'][$i]['soluong']--;
					break;
				}
			}
	}elseif($ac=='xoa'){
		for($i=0;$i<$dem;$i++){
					if($_SESSION['giohang'][$i]['id']==$id){
					$_SESSION['giohang'][$i]['id']=0;
					$_SESSION['giohang'][$i]['soluong']=0;
					break;
				}
			}
	}
	header("location: ./?xem=giohang");
	//kiểm tra xem có id không
}else if(!isset($_GET['ac']) && isset($_GET['id']) && !empty($_GET['id'])){
	$id=$_GET['id'];
	//kiểm tra session 
	if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
		//đếm tông session
		$dem=count($_SESSION['giohang']);
		$check=1;
		//hiện mảng session
		for($i=0;$i<$dem;$i++){
			if($_SESSION['giohang'][$i]['id']==$id){
				$_SESSION['giohang'][$i]['soluong']+=1;
				$check=0;
				break;
			}
		}
		//nếu session đã tồn tại nhưng không có $id thì gán cho session vào dòng cuối = $dem
		if($check==1){
		$_SESSION['giohang'][$dem]['id'] = $id;
		$_SESSION['giohang'][$dem]['soluong']=1;
		}
	}else{
		//session không có thì ép session thành mảng. và lưu phần tử 0
		$_SESSION['giohang']=array();
		$_SESSION['giohang'][0]['id'] = $id;
		$_SESSION['giohang'][0]['soluong']=1;
	}
	 header("location: ./?xem=giohang");
}else{
			if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
				$dem=count($_SESSION['giohang']);
				$tongtien=0;
			for($i=0;$i<$dem;$i++){
			$sql="select*from chitietsp where masp='{$_SESSION['giohang'][$i]['id']}'";
			$query_sql=mysqli_query($connect,$sql);
			$row_sanpham=mysqli_fetch_assoc($query_sql);
			$thanhtien=$_SESSION['giohang'][$i]['soluong']*$row_sanpham['gia'];
			$tongtien=$tongtien+$thanhtien;
			if($_SESSION['giohang'][$i]['id'] != 0 && $_SESSION['giohang'][$i]['soluong']>0){
			?>
			<p>Sản phẩm : <?php echo $row_sanpham['tensp'];?> </p>
			<p>Giá : <?php echo $row_sanpham['gia'];?></p>
			<p>Số lượng : <input disabled type="text" size="1" value="<?php echo $_SESSION['giohang'][$i]['soluong'];?>"/><a href="?xem=giohang&id=<?php echo $_SESSION['giohang'][$i]['id'];?>"><button style="width:20px;">+</button></a><a href="?xem=giohang&id=<?php echo $_SESSION['giohang'][$i]['id'];?>&ac=tru"><button style="width:20px;">-</button></a><a href="?xem=giohang&id=<?php echo $_SESSION['giohang'][$i]['id'];?>&ac=xoa"><button style="width:40px;">Xóa</button></a></p>
			<p>Tổng cộng : <?php echo $thanhtien;?></p>
			<br>
			<?php
			}
			}
			if($tongtien <= 0){
				echo "Giỏ hàng rỗng";
			}else{
			echo "Tổng tiền = ".$tongtien;
			echo "<br><center><a href='?xem=thongtinthanhtoan'><input type='submit' name='thanhtoan' value='Thanh Toán'/></a></center>";
			}
}	else{
	echo "Giỏ hàng rỗng";
}
}

?>
