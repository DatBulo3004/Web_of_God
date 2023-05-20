	
	
	
	
	<div id="sidebar">
				<div class="mucsitebar">
					<div class="titlebar">
						<p>Sản phẩm</p>
					</div>
					<ul>
					<?php
					$sql_loaisanpham="select*from loaisanpham";
					$query_loaisanpham=mysqli_query($connect,$sql_loaisanpham);
					while($row_loaisanpham=mysqli_fetch_assoc($query_loaisanpham)){
					?>
						<a href="?xem=chitietloaisanpham&id=<?php echo $row_loaisanpham['malsp'];?>"><li><?php echo $row_loaisanpham['tenloaisanpham'];?></li></a>
					<?php }?>
					</ul>
				</div>
				<div class="mucsitebar">
					<div class="titlebar">
						<p>Kết nối</p>
					</div>
					<ul>
						<a href="#"><li>Facebook</li></a>
					</ul>
				</div>
				<div class="mucsitebar">
					<div class="titlebar">
						<p>Hỗ Trợ</p>
					</div>
					<ul>
						<a href="#"><li>Skype</li></a>
					</ul>
				</div>
			</div>