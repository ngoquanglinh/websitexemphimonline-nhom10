<?php
$sql_thongtinphim="SELECT * FROM chitiet_phim WHERE id_phim=$_GET[id_phim]";
$query_thongtinphim=mysqli_query($connect,$sql_thongtinphim);
$array_thongtinphim=mysqli_fetch_array($query_thongtinphim);
?>
<!-- bắt đầu sline -->
<div class="content-left">
  <div class="col-md-8 edit-pd">
    <div class="row thongtinfilm">
      <div class="col-md-5">
        <div class="pf-image">
          <img src="admin/modules/quanlychitietphim/uploads/<?php echo $array_thongtinphim['anh']?>" alt="">
          <a href="index.php?view=xemphim&id_phim=<?php echo $array_thongtinphim['id_phim']?>">
            <button><i class="fas fa-play-circle icon-btn-xp">xem phim</i></button>
        </a>	
    </div>    
</div>

<div class="col-md-7 profile-film">
    <h1><?php echo $array_thongtinphim['tenphim'] ?></h1>
    <h2><?php echo $array_thongtinphim['ten_english'] ?></h2>
    <ul>
        <li> <label>Đang phát:<strong> Tập 1 vietsub</strong></label></li>
        <li> <label>Sắp chiếu:<strong> Tập 2 vietsub</strong></label></li>
         <li> <label>Đạo diễn:<a href=""> ngolinh</a></label></li>
         <li> <label>diễn viên:<a href=""> ngolinh</a></label></li>
         <li> <label>Thể loại:<a href=""> phim hành động</a></label></li>
         <li> <label>Quốc gia:<a href=""> việt nam</a></label></li>
         <li> <label>Thời lượng:<a href=""> 10 tập</a></label></li>
         <li> <label>Lượt xem:<span> 1000</span></label></li>
         <li> <label>Năm xuất bản:<a href=""> 2019</a></label></li>
         <li class="fb">
             <div class="fb-like" data-href="https://www.facebook.com/Lord-Lucifer-645376139238908/"  data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true">
             <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FLord-Lucifer-645376139238908%2F&width=122&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=408866402993380" width="122" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div>
            <div class="fb-save" data-uri="https://www.facebook.com/Lord-Lucifer-645376139238908/" data-size="small"></div>
            </div>
        </li><!--facebook  -->
</ul>           
</div>
</div>
<!-- top -->
<!-- title -->
<div class="row caption">
  <div class="col-md-8">
    <h3>nội dung phim</h3>
</div>
</div>
<!-- mid -->
<div class="row film-content">
  <div class="col-md-8 edit-pd">
    <h5><strong><p><?php echo $array_thongtinphim['tenphim']." , ";echo $array_thongtinphim['ten_english'];?></p></strong></h5>	
</div>
</div>
<!-- bot -->
<div class="row film-footer">
  <div class="fb-comments" data-href="https://www.facebook.com/linh0966756104" data-width="640" data-numposts="10"></div>
</div>
</div>
</div><!-- kết thúc left --> 
