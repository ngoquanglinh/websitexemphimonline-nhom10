<?php
    $sql="select * from loaiphim where id_loaiphim=$_GET[id]";
    $run=mysqli_query($connect,$sql);
    $dong=mysqli_fetch_array($run);
?>

<form action="modules/quanlyloaiphim/xuly.php?id=<?php echo $dong['id_loaiphim']?>" method="post" enctype="multipart/form-data">
<div class="table-responsive">
  <table class="table">
    <tr>
    	<th>Sửa Loại Sản Phẩm</th>
    </tr>
    <tr>
    	<td>Tên loại sản phẩm</td>
    	<td><input type="text" name="tenloaiphim" size="30" value="<?php echo $dong['tênloai_phim'] ?>"></td>
    </tr>
    <tr>
    	<td colspan="2" style="text-align: center"><input type="submit" name="sua" class="btn btn-success btn-sm" value="Sửa"></td>
    </tr>
  </table>
</div>
</form>