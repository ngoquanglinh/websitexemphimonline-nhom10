<?php 
$sql="select * from trailer where id_trailer='$_GET[id]'";
$run=mysqli_query($connect,$sql);
$dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlytrailerphim/xuly.php?id=<?php echo $dong['id_trailer'] ?>" method="post"  enctype="multipart/form-data">
  <div class="table-responsive">
    <table class="table">
     <thead>
      <tr>
       <th colspan="2" style="text-align: center;">Sửa chi tiết Trailer</th>
     </tr>
   </thead>
   <tbody>
    <tr>
     <td>Tên Trailer Phim</td>
     <td><input type="text" name="tenphim" size="30" value="<?php echo $dong['tenphim_trailer'] ?>"></td>
   </tr>
   <tr>
     <td>Link Trailer</td>
     <td><input type="text" name="linkphim" size="30" value="<?php echo $dong['link_trailer'] ?>"></td>
   </tr>
   <tr>
     <td>image</td>
     <td><input type="file" name="hinhanh" size="30" ><img src="modules/quanlychitietphim/uploads/<?php echo $dong['image_trailer']?>" alt="..." width="73" height="60"></td>
   </tr>
   <tr>
     <td>Name English</td>
     <td><input type="text" name="ten_english" size="30" value="<?php echo $dong['tenenglish_trailer'] ?>"></td>
   </tr>
   <tr>
    <td>Nội dung</td>
    <td><textarea name="noidung" rows="20"><?php echo $dong['noidung_trailer'] ?></textarea></td>
  </tr>
  <?php
   $sql="select * from loaiphim";
   $query_option=mysqli_query($connect,$sql);
   ?>
   <tr>
     <td>ID Loại Phim</td>
     <td>
      <select name="loaiphim">
        <?php 
        while($array_option=mysqli_fetch_array($query_option)){
         if($dong['id_loaiphim']==$array_option['id_loaiphim']){
           ?>
           <option selected="selected" value="<?php echo $array_option['id_loaiphim']?>"><?php echo $array_option['tênloai_phim']?></option>
           <?php
         }else{ 
           ?>  
           <option value="<?php echo $array_option['id_loaiphim']?>"><?php echo $array_option['tênloai_phim']?></option> 
           <?php
         }
       }
       ?> 
     </select>
   </td>
 </tr>
<tr>
 <td colspan="2" style="text-align: center;"><input type="submit" name="sua" class="btn btn-success" value="Sửa"></td>
</tr>
</tbody>

</table>
</div>
</form>
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
