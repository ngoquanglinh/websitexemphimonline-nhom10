<?php
if(isset($_SESSION['dangnhap'])){
	$session=$_SESSION['dangnhap'];
	$sqlss="select * from user where username='$session'";
	$sqlquery=mysqli_query($connect,$sqlss);
}
?>
<div class="container-fluid content">
	<div class="row editpd">
		<nav class="navbar navbar-default"  data-spy="affix" role="navigation">
			<div class="container-fluid bgcl">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header header-logo">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="logo" href="modules/quanlychitietphim/uploads/4.png">Brand</div>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
					</form>
					<div class="message">
						<div class="icon-nav">
							<i class="fas fa-bell"></i>
							<i class="fas fa-envelope"></i>
						</div>
						<div class="image-admin">
							<img src="modules/quanlychitietphim/uploads/avatar-2-2017.jpg">
						</div>
						<div class="name-admin">

							<div class="btn-group">
								<?php
								while ($array=mysqli_fetch_array($sqlquery)){										
									?>
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
										<?php echo $array['username'] ?><span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">seting</a></li>
										<li><a href="#">profile</a></li>
										<li><a href="#">my message</a></li>
										<li><a href="#">look screen</a></li>
										<li><a href="index.php?&ac=logout">log out</a></li>
									</ul>
								<?php } ?>
							</div>
						</div>
					</div>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>	
	</div>