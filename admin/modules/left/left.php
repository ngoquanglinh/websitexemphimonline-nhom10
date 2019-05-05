<?php
if(isset($_GET['ac'])&&$_GET['ac']=='logout'){
	unset($_SESSION['dangnhap']);
	header('location:login.php');
}
?>
<div class="row">
	<div class="col-md-12 left">
		<div  class="menu-vetical">
			<ul data-spy="affix" data-offset-top="30">
				<li><i class="fas fa-home"></i><a href="index.php">home</a></li>
				<li><i class="fas fa-cloud-upload-alt"></i><a href="index.php?quanly=quanlyloaiphim&ac=them">quản lý loại phim</a></li>
				<li><i class="fas fa-cloud-upload-alt"></i><a href="index.php?quanly=quanlychitietphim&ac=them">quản lý chi tiết phim</a></li>
				<li><i class="fas fa-cloud-upload-alt"></i><a href="index.php?quanly=quanlytrailerphim&ac=them">quản lý trailer</a></li>
				<li><i class="fas fa-user-cog"></i><a href="index.php?quanly=doimatkhau">đổi mật khẩu</a></li>
				<li><i class="fas fa-power-off"></i><a href="index.php?ac=logout">đăng xuất</a></li>
			</ul>
		</div>
	</div>
</div>