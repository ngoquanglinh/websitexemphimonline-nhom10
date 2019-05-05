<?php
	$sql="select * from chitiet_phim order by id_phim desc";
	$query=mysqli_query($connect,$sql);
?>
<div class="hello">
<div class="table-responsive">
  <table class="table table-striped table-condensed">
  	<thead>
   	<tr>
  		<th>STT</th>
  		<th>Id Phim</th>
  		<th>Tên Phim</th>
  		<th>Link Phim</th>
  		<th>Ảnh</th>
  		<th>Tên Engligh</th>
  		<th>Id Loại phim</th>
  		<th style="text-align: center;">Quản lý</th>
  	</tr>
  </thead>
  	<?php
  		$i=0;
  		while ($array=mysqli_fetch_array($query)) {
  	?>
  	<tbody>
  	<tr>
  		<td><?php echo $i++ ?></td>
  		<td><?php echo $array['id_phim'] ?></td>
  		<td><?php echo $array['tenphim'] ?></td>
  	    <td><?php echo $array['linkphim']?>
  		<td><?php echo $array['anh'] ?></td>
  		<td><?php echo $array['ten_english'] ?></td>
  		<td><?php echo $array['id_loaiphim'] ?></td>
  		<td><button type="button" class="btn btn-success">Sửa</button></td>
  		<td><button type="button" class="btn btn-success">Xóa</button></td>
  	</tr>
  </tbody>
  	<?php
  		}
  	?>
  	
  </table>
</div>
</div>