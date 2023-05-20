
<?php

if(isset($_GET["xem"])){
			$bien=$_GET["xem"];
		}else{
			$bien="";
		}
		$color1='';
		$color2='';
		$color3='';
		$color4='';
			$color5='';
if($bien=="sanphammoi"){
			$color1='style="background:#E17D0D;color:white;"';
		}
		if($bien=="khuyenmai"){
			$color3='style="background:#E17D0D;color:white;"';
		}
		if($bien=="loaisanpham"){
			$color2='style="background:#E17D0D;color:white;"';
		}
		if($bien=="banchay"){
			$color4='style="background:#E17D0D;color:white;"';
		}
		if($bien=="taikhoan"){
			$color5='background:#E17D0D;color:white;';
		}

if(isset($_SESSION['username'])){
	$soluong=0;
	if(isset($_SESSION['giohang']))
	{
		$dem=count($_SESSION['giohang']);
		for($i=0;$i<$dem;$i++){
				if($_SESSION['giohang'][$i]['id'] != 0 && $_SESSION['giohang'][$i]['soluong']>0){
						$soluong++;
				}
			
		}
	}else{
		$soluong=0;
	}
$menu="<a href='index.php?xem=taikhoan'><li style='color:blue;border:1px solid white;{$color5}'>Tài Khoản</li></a><a href='index.php?xem=giohang'><li>Giỏ hàng(<font color='red'>$soluong</font>)</li></a>";
}else{
	$menu="";
}

?>
<header>
<div id="logo">
			<div id="tenweb">
      <a href="./">
        <span class="logo-text">IDStyle</span>.<span class="logo-subtext">Thời trang</span>
      </a>
    		</div>
		
		
		<?php 
if(isset($_POST["btquadangky"])){
		header('location: index.php?xem=dangky');
	}
	
?>

		<div id="dangnhap">
      <!-- <div id="dangnhap1"></div> -->
      <a href="index.php?xem=dangnhap" method="post">
        <input type="submit" name="btdangnhap" value="Đăng Nhập" />
        |
        <input type="submit" name="btquadangky" value="Đăng Ký" />
      </a>
    </div>
</div>
</header>
<nav>
  <div id="menu_web">
    <ul>
      <li><a href="./">Trang Chủ</a></li>
      <li><a href="index.php?xem=sanphammoi">Sản Phẩm Mới</a></li>
      <li><a href="index.php?xem=khuyenmai">Khuyến Mãi</a></li>
      <li><a href="index.php?xem=banchay">Bán Chạy</a></li>
      <!-- Thêm các mục menu khác -->
    </ul>
    <form action="./" method="POST">
      <div id="fromtim">
        <input type="submit" name="bt_timkiem" value="Tìm" />
        <input size="15" type="text" name="tim" placeholder="Tìm kiếm" />
      </div>
    </form>
  </div>
</nav>