<div id="trang" style="clear:both;overflow:auto;">
	<?php

	if ($row_sanphamtrang < $sosanpham1trang) {
		$den = $row_trang;
	} else {
		$den = ($trang * $sosanpham1trang);
	}
	?>
	<?php if ($sotrang >= 1) { ?>
		<p>Trang </p>
		<ul><?php
			for ($i = 1; $i <= $sotrang; $i++) {
				if ($i == $trang) {
					$hien = "style='background:#898996;'";
				} else {
					$hien = "";
				}
				echo "<a href='?xem={$tentrang}&trang={$i}'><li {$hien}>{$i}</li></a>";
			?>

			<?php
			}
			?>
			<div id="sosanpham" style="float:right;">
				<p>Đang xem <?php echo $min_limit + 1; ?> Đến <?php echo $den; ?> Của <?php echo $row_trang ?> Kết quả </p>
			</div>
		</ul>
	<?php } ?>
</div>