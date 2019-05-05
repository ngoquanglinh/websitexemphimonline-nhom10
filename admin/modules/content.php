
<div class="row content-m">
	<div class="col-md-2 dm">
		<?php
			include('modules/left/left.php');
		?>
	</div>
	<div class="col-md-10 dm">
			<?php
			if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}else{
			$tam='';
		}if($tam=='quanlyloaiphim'){
			include('modules/quanlyloaiphim/main.php');
		}elseif($tam=='quanlychitietphim'){
			include('modules/quanlychitietphim/main.php');
		}elseif($tam=='quanlytrailerphim'){
			include('modules/quanlytrailerphim/main.php');
		}elseif($tam=='doimatkhau'){
			include('doimatkhau.php');
		}
		else{
			include('modules/right/right.php');
		}
	?>	
	</div>
</div>