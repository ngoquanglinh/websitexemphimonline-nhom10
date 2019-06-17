<!-- bắt đầu sline -->
<div class="content-left">
    <div class="col-md-8">
        <div class="row slide">
            <div id="carousel-example-generic" class="carousel slide sline" data-ride="carousel">
                <!-- Indicators -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin/modules/quanlychitietphim/uploads/slide1.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="admin/modules/quanlychitietphim/uploads/slide2.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="admin/modules/quanlychitietphim/uploads/slide3.jpg" alt="...">
                    </div>
                </div>

                <!-- nút chuyển slide -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- kết thúc sline1 -->
        <div class="row">
            <div id="mylove" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <?php
                        $sql_phim="SELECT * FROM chitiet_phim WHERE (id_loaiphim=2 OR id_loaiphim=1) ORDER BY id_phim DESC LIMIT 4";
                        $query_phim=mysqli_query($connect,$sql_phim);
                        ?>
                        <div class="row thumbnail-thu1">
                            <?php	
                            while($array_phim=mysqli_fetch_array($query_phim)){
                              ?>
                              <div class="col-xs-6 col-sm-4 col-md-3 edit-pd">
                                <a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_phim['id_loaiphim']?>&id_phim=<?php echo $array_phim['id_phim']?>" class="thumbnail">
                                   <img src="admin/modules/quanlychitietphim/uploads/<?php echo $array_phim['anh'] ?>" data-src="holder.js/100%x180" alt="anh">
                                   <p class="name"><?php echo $array_phim['tenphim'] ?></p>
                                   <p class="real-name"><?php echo $array_phim['ten_english'] ?></p>
                               </a>
                           </div>
                           <?php
                       }
                       ?>
                   </div>
               </div>
               <div class="item">
                <?php
                $sql_phim="SELECT * FROM chitiet_phim WHERE (id_loaiphim=2 OR id_loaiphim=1) ORDER BY id_phim DESC LIMIT 5,4";
                $query_phim=mysqli_query($connect,$sql_phim);
                ?>
                <div class="row thumbnail-thu1">
                    <?php	
                    while($array_phim=mysqli_fetch_array($query_phim)){
                      ?>
                      <div class="col-xs-6 col-sm-4 col-md-3 edit-pd">
                        <a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_phim['id_loaiphim']?>&id_phim=<?php echo $array_phim['id_phim']?>" class="thumbnail">
                           <img src="admin/modules/quanlychitietphim/uploads/<?php echo $array_phim['anh'] ?>" data-src="holder.js/100%x180" alt="...">
                           <p class="name"><?php echo $array_phim['tenphim'] ?></p>
                           <p class="real-name"><?php echo $array_phim['ten_english'] ?></p>
                       </a>
                   </div>
                   <?php
               }
               ?>
           </div>
       </div>
       <div class="item">
        <?php
        $sql_phim="SELECT * FROM chitiet_phim WHERE (id_loaiphim=2 OR id_loaiphim=1) ORDER BY id_phim DESC LIMIT 9,4";
        $query_phim=mysqli_query($connect,$sql_phim);
        ?>
        <div class="row thumbnail-thu1">
            <?php	
            while($array_phim=mysqli_fetch_array($query_phim)){
              ?>
              <div class="col-xs-6 col-sm-4 col-md-3 edit-pd">
                <a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_phim['id_loaiphim']?>&id_phim=<?php echo $array_phim['id_phim']?>" class="thumbnail">
                   <img src="admin/modules/quanlychitietphim/uploads/<?php echo $array_phim['anh'] ?>" data-src="holder.js/100%x180" alt="...">
                   <p class="name"><?php echo $array_phim['tenphim'] ?></p>
                   <p class="real-name"><?php echo $array_phim['ten_english'] ?></p>
               </a>
           </div>
           <?php
       }
       ?>
   </div>
</div>
</div>
<a class="left carousel-control" href="#mylove" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#mylove" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
<!-- kết thúc sline phim lẻ và bộ -->
<div class="row title-phimbo">
    <div class="col-md-12 col-md-12 col-xs-12">
        <h3>
          <i class="fas fa-align-justify"></i>
          <span>phim bộ mới cập nhật</span>
          <a href="">xem tất cả</a>
      </h3>
  </div>
</div>
<!-- bắt đàu phim bộ -->
<?php
$sql_phimbo="select * from chitiet_phim where id_loaiphim=2";
$query_phimbo=mysqli_query($connect,$sql_phimbo);
?>
<div class="row">
    <div class="row thumbnail-thu1">
        <?php
        while($array_phimbo=mysqli_fetch_array($query_phimbo)){
         ?>

         <div class="col-xs-6 col-sm-4 col-md-3 edit-pd">
            <a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_phimbo['id_loaiphim']?>&id_phim=<?php echo $array_phimbo['id_phim']?>" class="thumbnail">
              <img src="admin/modules/quanlychitietphim/uploads/<?php echo $array_phimbo['anh'] ?>" data-src="holder.js/100%x180" alt="...">
              <p class="name"><?php echo $array_phimbo['tenphim'] ?></p>
              <p class="real-name"><?php echo $array_phimbo['ten_english'] ?></p>
          </a>
      </div>
      <?php
  }
  ?>
</div>
</div>
<!-- title thứ 2 -->
<div class="row title-phimbo">
    <div class="col-md-12  col-md-12 col-xs-12">
        <h3><i class="fas fa-align-justify"></i>
          <span>phim lẻ mới cập nhật</span>
          <a href="">xem tất cả</a>
      </h3>
  </div>
</div>
<!-- thumbnail 5 -->
<?php
$sql_phimle="select * from chitiet_phim where id_loaiphim=1";
$query_phimle=mysqli_query($connect,$sql_phimle);
?>
<div class="row">
    <div class="row thumbnail-thu1">
        <?php
        while($array_phimle=mysqli_fetch_array($query_phimle)){
           ?>

           <div class="col-xs-6 col-sm-4 col-md-3 edit-pd">
            <a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_phimle['id_loaiphim']?>&id_phim=<?php echo $array_phimle['id_phim']?>" class="thumbnail">
             <img src="admin/modules/quanlychitietphim/uploads/<?php echo $array_phimle['anh']?>" data-src="holder.js/100%x180" alt="abc">
             <p class="name"><?php echo $array_phimle['tenphim']?></p>
             <p class="real-name"><?php echo $array_phimle['ten_english']?></p>
         </a>
     </div>
     <?php
 }
 ?>
</div>
</div>
<!-- kết thúc phim lẻ dòng 1 -->
<!-- title thứ 3 -->
<div class="row title-phimbo">
    <div class="col-md-12 col-md-12 col-xs-12">
        <h3><i class="fas fa-align-justify"></i>
          <span>Anime mới cập nhật</span>
          <a href="">xem tất cả</a>
      </h3>
  </div>
</div>
<!-- thumbnail 8 -->
<?php
$sql_phimhoathinh="select * from chitiet_phim where id_loaiphim=3";
$query_phimhoathinh=mysqli_query($connect,$sql_phimhoathinh);
?>
<div class="row">
    <div class="row thumbnail-thu1">
        <?php
        while ($array_phimhoathinh=mysqli_fetch_array($query_phimhoathinh)){
            ?>
            <div class="col-xs-6 col-sm-4 col-md-3 edit-pd">
                <a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_phimhoathinh['id_loaiphim']?>&id_phim=<?php echo $array_phimhoathinh['id_phim']?>" class="thumbnail">
                 <img src="admin/modules/quanlychitietphim/uploads/<?php echo $array_phimhoathinh['anh']?>" data-src="holder.js/100%x180" alt="...">
                 <p class="name"><?php echo $array_phimhoathinh['tenphim']?></p>
                 <p class="real-name"><?php echo $array_phimhoathinh['ten_english']?></p>
             </a>
         </div>
         <?php
     }
     ?>
 </div>
</div>
</div>
</div>
<!-- kết thúc left -->