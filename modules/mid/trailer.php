

<?php 
$sql_xemtrailer="SELECT * FROM	trailer WHERE id_trailer=$_GET[id_trailer]";
$query_xemtrailer=mysqli_query($connect,$sql_xemtrailer);
$array_xemtrailer=mysqli_fetch_array($query_xemtrailer);
?>
	<div class="container-fluid">
		<div class="container">
			<div class="row movie">
				<div class="cod-md-12">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" width="980px" height="500px" src="<?php echo $array_xemtrailer['link_trailer'] ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					 </div>
				</div>
				<div class="row messager">
					<p>cú pháp tìm kiếm nhanh nhất trên google:[tên phim + bilutv]]</p>
				</div>
				<div class="row ads1">
					<img src="image/ads1.gif">
				</div>
			</div>
		</div>
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