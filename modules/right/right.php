
			<div class="conten-right">	<!-- bắt đầu right -->
				
				<div class="col-md-4">
					<div class="row title-right">
						<div class="col-md-12">
							<a href="">xem nhiều trong ngày</a>
						</div>
					</div>
					<!-- bắt đầu list phim -->
					<div class="row list-film">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#phimbo" role="tab" data-toggle="tab">phim bộ</a></li>
							<li><a href="#phimle" role="tab" data-toggle="tab">phim lẻ</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content ct">
							<div class="tab-pane active" id="phimbo">
								<?php
									$sql_phimbo="SELECT * FROM chitiet_phim WHERE id_loaiphim=2 ORDER BY id_phim DESC LIMIT 10";
									$query_phimbo=mysqli_query($connect,$sql_phimbo);
								?>
								<ul class="ul-right">
									<?php
									for($i=1;$i<10;$i++){
										while ($array_phimbo=mysqli_fetch_array($query_phimbo)){
									?>
									<li><span><?php echo $i++?></span><a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_phimbo['id_loaiphim']?>&id_phim=<?php echo $array_phimbo['id_phim']?>"><?php echo $array_phimbo['tenphim'] ?></a><br /><i class="fas fa-eye mat"></i><i class="view">100,000 lượt xem</i></li>
									<?php
								 		}
								 	}
								 	?>
								</ul>
							</div>
							<div class="tab-pane" id="phimle">
								<?php
									$sql_phimle="SELECT * FROM chitiet_phim WHERE id_loaiphim=1 ORDER BY id_phim DESC LIMIT 10";
									$query_phimle=mysqli_query($connect,$sql_phimle);
								?>
								<ul class="ul-right">
									<?php
									for($i=1;$i<10;$i++){
										while ($array_phimle=mysqli_fetch_array($query_phimle)){
									?>
									<li><span><?php echo $i++?></span><a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_phimle['id_loaiphim']?>&id_phim=<?php echo $array_phimle['id_phim']?>""><?php echo $array_phimle['tenphim'] ?></a><br /><i class="fas fa-eye mat"></i><i class="view">100,000 lượt xem</i></li>
								<?php
							 	  }
							 	}
							 	?>
								</ul>
							</div>
						</div>
					</div>
					<!-- phim sắp chiêu -->
					<div class="row title-right">
						<div class="col-md-12">
							<a href="">phim sắp chiếu</a>
						</div>
					</div>
					<div class="row ct-phim-sc">
						<div class="col-md-12 phim-sc">
							<ul>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
								<li>
									<div class="image-name">
										<div><img src="image/img5.jpg" alt=""></div>
										<div class="tt-phim">
											<div class="name"><p>đội trưởng marvel</p></div>
											<div class="read-name"><p>captain marvel(2019)</p></div>
											<i class="fas fa-eye mat-sau"></i><i class="view-sau">100,000 lượt xem</i>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="row title-right">
						<div class="col-md-12">
							<a href="">tags</a>
						</div>
					</div>
					<!-- tag -->
					<div class="row ct-tags">
						<div class="col-md-12 tags">
							<ul>
								<li><a href="">tội phạm</a></li>
								<li><a href="">tình yêu</a></li>
								<li><a href="">phim hài</a></li>
								<li><a href="">trinh thám</a></li>
								<li><a href="">siêu nhân</a></li>
								<li><a href="">quái vật</a></li>
								<li><a href="">tận thế</a></li>
								<li><a href="">điệp viên</a></li>
								<li><a href="">khủng bố</a></li>
								<li><a href="">thám tử</a></li>
								<li><a href="">giết người</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- kết thúc content-->
	</div>







