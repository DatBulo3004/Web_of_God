<div id="chinh">
<?php
if(isset($_SESSION['username'])){?>
	<center>Chào : <?php echo $_SESSION['username']?> bạn đã đăng nhập thành công !!!</center>
	<?php
}else{
	?>
<!-- <center>Lưu ý : Admin & Khách Hàng Khác Nhau !!! Acc demo admin theo CSDL : (huynhlamid | 12345)</center> -->
<?php } ?>
</div>