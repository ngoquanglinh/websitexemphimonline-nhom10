<div class="row">
	<div class="col-md-6">
		<div class="left-trailer">
			<?php
			if(isset($_GET['ac'])){
				$tam=$_GET['ac'];
			}else{
				$tam='';
			}if($tam=='them'){
				include('modules/quanlytrailerphim/them.php');
			}if($tam=='sua'){
				include('modules/quanlytrailerphim/sua.php');
			}
			?>
		</div>
	</div>
	<div class="col-md-6">
		<div class="right-trailer">
			<?php
			include('modules/quanlytrailerphim/lietke.php');	
			?>
		</div>
	</div>
</div>