<?php
@session_start();?>

<div class="tungsanpham">
	<a href="?xem=chitietsanpham&id=<?php echo $row_sanpham['masp'];?>"><img src=".\admincp\noidung\chitietsanpham\upload\<?php echo $row_sanpham['hinhanh'];?>" width="170" alt="Sản Phẩm demo" class="image"/></a>
	<div class="gioithieuso">
		<h3><?= $row_sanpham['tensp'] ?> </h3>
		<p>Giá : <?= number_format($row_sanpham['gia']) ?> VND</p>
		<p>Đánh Giá : <?= $row_sanpham['danhgia'] ?></p>
		

		<?php 
		if ($row_sanpham['tensp'] != 0) {
			echo "<p>Khuyến Mãi : {$row_sanpham['khuyenmai']}%</p>";
		}
		else {
			echo "<br>";
		}
		?>
		<a href="?xem=giohang&id=<?= $row_sanpham['masp'] ?>">Thêm vào giỏ</a>
		<a href="?xem=chitietsanpham&id=<?= $row_sanpham['masp'] ?>">Chi Tiết</a>
		</ul>
	</div>
</div>