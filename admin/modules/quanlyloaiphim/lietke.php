<?php
	$sql="select * from loaiphim order by id_loaiphim desc";
	$query_sql=mysqli_query($connect,$sql);
?>
<div class="table-responsive">
  <table class="table table-striped">
  	<tr>
  		<th>STT</th>
	    <th>Id Loại Phim</th>
	    <th>Tên Loại Phim</th>
	    <th colspan="2" style="text-align: center;">Quản Lý</th>
    </tr>
    <?php
    	$i=0;
    	while($array=mysqli_fetch_array($query_sql)){
    ?>
    <tr>
    	<td><?php echo $i++; ?></td>
    	<td><?php echo $array['id_loaiphim'] ?></td>
    	<td><?php echo $array['tênloai_phim'] ?></td>
    	<td><a href="index.php?quanly=quanlyloaiphim&ac=sua&id=<?php echo $array['id_loaiphim']?>"><button type="button" class="btn btn-success btn-sm">Sửa</button></a></td>
    	<td><a href="modules/quanlyloaiphim/xuly.php?id=<?php echo $array['id_loaiphim']?>"><button type="button" class="btn btn-success btn-sm">Xóa</button></a></td>
    </tr>
    <?php
		}
	?>
  </table>
</div>