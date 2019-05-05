<form action="" method="post" enctype="mutlipart/form-data">
<div class="table-responsive">
  <table class="table">
  	<thead>
  		<tr>
  			<th colspan="2" style="text-align: center;">Thêm chi tiết Phim</th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr>
  			<td>Tên Phim</td>
  			<td><input type="" name="" size="30"></td>
  		</tr>
  		<tr>
  			<td>Link Phim</td>
  			<td><input type="" name="" size="30"></td>
  		</tr>
  		<tr>
  			<td>Ảnh</td>
  			<td><input type="file" name="" size="30"></td>
  		</tr>
  		<tr>
  			<td>Name English</td>
  			<td><input type="" name="" size="30"></td>
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