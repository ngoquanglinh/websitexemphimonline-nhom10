 <?php 
 $sql="select * from chitiet_phim where id_phim='$_GET[id]'";
 $run=mysqli_query($connect,$sql);
 $dong=mysqli_fetch_array($run);
 ?>
 <form action="modules/quanlychitietphim/xuly.php?id=<?php echo $dong['id_phim'] ?>" method="post" enctype="mutlipart/form-data">
  <div class="table-responsive">
    <table class="table">
     <thead>
      <tr>
       <th colspan="2" style="text-align: center;">Sửa chi tiết Phim</th>
     </tr>
   </thead>
   <tbody>
    <tr>
     <td>Tên Phim</td>
     <td><input type="text" name="tenphim" size="30" value="<?php echo $dong['tenphim'] ?>"></td>
   </tr>
   <tr>
     <td>Link Phim</td>
     <td><input type="text" name="linkphim" size="30" value="<?php echo $dong['linkphim']?>"></td>
   </tr>
   <tr>
     <td>Ảnh</td>
     <td><input type="file" name="hinhanh" size="30"><img src="modules/quanlychitietphim/uploads/<?php echo $dong['anh']?>" width="70" height="60" /></td>
   </tr>
   <tr>
     <td>Name English</td>
     <td><input type="text" name="ten_english" size="30" value="<?php echo $dong['ten_english'] ?>"></td>
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