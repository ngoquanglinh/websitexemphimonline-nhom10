  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<form action="" method="post" enctype="mutlipart/form-data">
<div class="table-responsive">
  <table class="table">
  	<thead>
  		<tr>
  			<th colspan="2" style="text-align: center;">Thêm chi tiết Trailer</th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr>
  			<td>Tên Trailer Phim</td>
  			<td><input type="text" name="" size="30"></td>
  		</tr>
  		<tr>
  			<td>Link Trailer</td>
  			<td><input type="text" name="" size="30"></td>
  		</tr>
  		<tr>
  			<td>image</td>
  			<td><input type="file" name="" size="30"></td>
  		</tr>
  		<tr>
  			<td>Name English</td>
  			<td><input type="text" name="" size="30"></td>
  		</tr>
      <tr>
        <td>Nội dung</td>
        <td><textarea name="" rows="20"></textarea></td>
      </tr>
  				<?php
  			$sql="select * from loaiphim";
  			$query=mysqli_query($connect,$sql);
  		?>
  		<tr>
  			<td>ID Loại Phim</td>
  			<td>
  				<select name="">
  				<?php
  					while ($array=mysqli_fetch_array($query)){		
  				?>
  					<option value="<?php echo $array['id_loaiphim'] ?>"><?php echo $array['tênloai_phim'] ?></option>
  				<?php
  					}
  				?>
  				</select>
  			</td>
  		</tr>
 
  		<tr>
  			<td colspan="2" style="text-align: center;"><input type="button" class="btn btn-success" value="Thêm"></td>
  		</tr>
  	</tbody>

  </table>
</div>
</form>
