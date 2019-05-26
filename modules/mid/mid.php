<?php
function getBetween($content,$start,$end){
	$r = explode($start, $content);
	if (isset($r[1])){
		$r = explode($end, $r[1]);
		return $r[0];
	}
	return '';
}
?>

<?php 
$sql_xemphim="SELECT * FROM	chitiet_phim WHERE id_phim=$_GET[id_phim]";
$query_phim=mysqli_query($connect,$sql_xemphim);
$array_xemphim=mysqli_fetch_array($query_phim);
$link_video="$array_xemphim[linkphim]";
if (isset($link_video)){
	$ch = curl_init($link_video);
	curl_setopt( $ch, CURLOPT_POST, false );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U;   Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
	curl_setopt( $ch, CURLOPT_HEADER, false );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	$data = curl_exec( $ch );
	curl_close($ch );
	$html_encoded = htmlentities($data);

	if (stripos($data,"hd_src_no_ratelimit:")!=false && stripos($data, "aspect_ratio")!=false) {
		$start = "hd_src_no_ratelimit:";
		$end = ",aspect_ratio";
		$videoHD = getBetween($data,$start,$end);
	} else {
		$videoHD = "";
	}

	if (stripos($data,"sd_src_no_ratelimit:")!=false && stripos($data, "aspect_ratio")!=false) {
		$start = "sd_src_no_ratelimit:";
		$end = ",aspect_ratio";
		$videoSD = getBetween($data,$start,$end);
	} else {
		$videoSD = "";
	}
	
	?>
	<div class="container-fluid">
		<div class="container">
			<div class="row movie">
				<div class="cod-md-12">
					<video controls="">
						<source src=<?=$videoSD?> type="video/mp4">
						</video>	
					</div>
				</div>
				<div class="row messager">
					<p>cú pháp tìm kiếm nhanh nhất trên google:[tên phim + bilutv]]</p>
				</div>
				<div class="row ads1">
					<img src="admin/modules/quanlychitietphim/uploads/ads.gif">
				</div>
			</div>
		</div>
		<?php
	}
	?>
	<!--end video-->
	<div class="container-fluid movie-bottom">
		<div class="container">
			<div class="row xem-film">
				<div class="col-md-12"> 
					<div class="fb-comments" data-href="https://www.facebook.com/linh0966756104" data-width="950"  
					data-numposts="10">
				</div>
			</div>        
		</div>
	</div>
</div>