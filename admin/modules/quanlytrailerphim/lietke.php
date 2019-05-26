<?php
	$sql="select * from trailer order by id_trailer desc";
	$query=mysqli_query($connect,$sql);
?>
<div class="hello">
<div class="table-responsive">
  <table class="table table-striped table-condensed">
  	<thead>
   	<tr>
  		<th>STT</th>
  		<th>Id Trailer</th>
  		<th>Tên Phim</th>
  		<th>Link Phim</th>
  		<th>Ảnh</th>
      <th>Nội Dung</th>
  		<th>Tên Engligh</th>
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
  		<td><?php echo $array['id_trailer'] ?></td>
  		<td><?php echo $array['tenphim_trailer'] ?></td>
  	  <td><?php echo $array['link_trailer']?>
  		<td><?php echo $array['image_trailer'] ?></td>
      <td><?php echo $array['noidung_trailer'] ?></td>
  		<td><?php echo $array['tenenglish_trailer'] ?></td>
  		<td><a href="index.php?quanly=quanlytrailerphim&ac=sua&id=<?php echo $array['id_trailer'] ?>"><button type="button" class="btn btn-success">Sửa</button></a></td>
  		<td><a href="modules/quanlytrailerphim/xuly.php?id=<?php echo $array['id_trailer']?>"><button type="button" class="btn btn-success">Xóa</button></a></td>
  	</tr>
  </tbody>
  	<?php
  		}
  	?>
  	
  </table>
</div>
</div>