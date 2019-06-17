<!-- trang tim kiem -->
<?php
if(isset($_POST['btnsearch'])){
  $search=$_POST['search'];
  $sql_search="SELECT * FROM chitiet_phim WHERE tenphim LIKE '%$search%'";
  $query_search=mysqli_query($connect,$sql_search);
}
?>
<div class="row pagephim">
    <!-- bắt đầu sline -->
    <div class="content-left">
        <div class="col-md-8 pagect">
            <div class="row caption">
                <div class="col-md-8 title-pagephim">
                    <i class="fa fa-folder-open"></i>
                    <h3>phim chiếu rạp bilutv</h3>
                </div>
            </div>
            <div class="row">
                <div class="chieurap">
                    <div class="option">
                        <select name="">
                            <option value="">--sắp xếp--</option>
                            <option value="">mới cập nhật</option>
                            <option value="">năm xuất bản</option>
                            <option value="">tên phim</option>
                            <option>lượt xem</option>
                        </select>
                    </div>
                    <div class="option">
                        <select name="">
                            <option value="">--phim lẻ--</option>
                            <option>--phim bộ--</option>
                        </select>
                    </div>
                    <div class="option">
                        <select name="">
                            <option value="">--âm nhạc--</option>
                            <option>bí ẩn</option>
                            <option>cao bồi</option>
                        </select>
                    </div>
                    <div class="option">
                        <select name="">
                            <option value="">--quốc gia--</option>
                            <option>việt nam</option>
                            <option>mỹ</option>
                            <option>trung quốc</option>
                            <option>hàn quốc</option>
                        </select>
                    </div>
                    <div class="option">
                        <select name="">
                            <option value="">--năm--</option>
                            <option>2019</option>
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                        </select>
                    </div>
                    <div class="option">
                        <button>lọc phim</button>
                    </div>
                </div>
            </div>
            <div class="row dmm">
                <div class="row thumbnail-thu1">
                    <?php 
                    if($count=mysqli_num_rows($query_search)==0){
                      ?>
                      <p style="text-align:center;color:#e10c00;padding:10px">không tìm thấy phim nào</p>
                      <?php
                  }else{
                    while($array_pagephim=mysqli_fetch_array($query_search)){
                      ?>
                      <div class="col-xs-6 col-md-3 edit-pd">
                        <a href="index.php?xem=thongtinphim&id_loaiphim=<?php echo $array_pagephim['id_loaiphim']?>&id_phim=<?php echo $array_pagephim['id_phim']?>" class="thumbnail">
                          <img src="admin/modules/quanlychitietphim/uploads/<?php echo $array_pagephim['anh'] ?>" data-src="holder.js/100%x180" alt="">
                          <p class="name"><?php echo $array_pagephim['tenphim'] ?></p>
                          <p class="real-name"><?php echo $array_pagephim['ten_english'] ?></p>
                      </a>
                  </div>
                  <?php
              }
          }
          ?>
      </div>
  </div>
</div>
</div>
        <!-- kết thúc left -->