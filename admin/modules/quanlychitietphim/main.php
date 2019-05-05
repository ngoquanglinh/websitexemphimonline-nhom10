<div class="row">
	<div class="col-md-5">
		<div class="left-chitietphim">
			<?php
			if(isset($_GET['ac'])){
				$tam=$_GET['ac'];
			}else{
				$tam='';
			}if($tam=='them'){
				include('modules/quanlychitietphim/them.php');
			}if($tam=='sua'){
				include('modules/quanlychitietphim/sua.php');
			}
			?>
		</div>
	</div>
	<div class="col-md-7">
		<div class="right-chitietphim">
			<?php
			
			include('modules/quanlychitietphim/lietke.php');	
			
			?>
		</div>
	</div>
</div>