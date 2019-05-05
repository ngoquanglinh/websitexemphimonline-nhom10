<div class="row">
	<div class="col-md-6">
		<div class="left-loaiphim">
			<?php
			if(isset($_GET['ac'])){
				$tam=$_GET['ac'];
			}else{
				$tam='';
			}if($tam=='them'){
				include('modules/quanlyloaiphim/them.php');
			}if($tam=='sua'){
				include('modules/quanlyloaiphim/sua.php');
			}
			?>
		</div>
	</div>
	<div class="col-md-6">
		<div class="right-loaiphim">
			<?php
			
			include('modules/quanlyloaiphim/lietke.php');	
			
			?>
		</div>
	</div>
</div>