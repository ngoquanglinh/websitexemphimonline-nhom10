<div class="container-fluid cf-content">
		<div class="container">
           <?php
		        if(isset($_GET['xem'])){
					$tam=$_GET['xem'];
				}else{
					$tam='';
				}if($tam=='phimkinhdi'){
					include('modules/left/phimkinhdi.php');
				}elseif($tam=='phimle'){
					include('modules/left/phimle.php');
				}elseif($tam=='anime'){
					include('modules/left/anime.php');
				}elseif($tam=='phimbo'){
					include('modules/left/phimbo.php');
				}elseif($tam=='hoathinh'){
					include('modules/left/hoathinh.php');
				}elseif($tam=='tvshow'){
					include('modules/left/tvshow.php');
				}elseif($tam=='chieurap'){
					include('modules/left/chieurap.php');
				}else
					include('modules/left/home.php');
		   ?>
           <?php
		        include('modules/right/top-right.php');
				include('modules/right/bottom-right.php');
           ?>

        </div><!-- kết thúc content-->
</div>	<!-- ket thúc contaner-fuil -->