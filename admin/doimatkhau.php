<?php
	if(isset($_POST['change_password'])){
		$username=$_POST['username'];
		$old_password=$_POST['old_password'];
		$new_password=$_POST['new_password'];
		$sql="select * from user where username='$username' and password='$old_password' limit 1";
		$sql_query=mysqli_query($connect,$sql);
		$count_query=mysqli_num_rows($sql_query);
		if($count_query==0){
			echo "sai tên tài khoản hoặc mật khẩu";
		}
		else{
			$sql_update_password=mysqli_query($connect,"update user set password='$new_password'");
			echo "thay mật khẩu thành công";
		}
	}
?>
<form action="" method="post">
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>Đổi Mật Khẩu Admin</th>
			</tr>
		</thead>
		<tbody>	
			<tr>
				<td>Tên Tài Khoản</td>
				<td><input type="text" name="username" size="30"></td>
			</tr>
			<tr>
				<td>Mật Khẩu Cũ</td>
				<td><input type="text" name="old_password" value="" size="30"></td>
			</tr>
			<tr>
				<td>Mật Khẩu Mới</td>
				<td><input type="text" name="new_password" value="" size="30"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" class="btn btn-success" value="Đổi Mật Khẩu" name="change_password">
				</td>
			</tr>
		</tbody>	
	</table>
</div>
</form>