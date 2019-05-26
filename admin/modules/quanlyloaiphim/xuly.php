<?php
	include("../config.php");
	$id=$_GET['id'];
	$tenloaiphim=$_POST['tenloaiphim'];
	if(isset($_POST['them'])){
		$sql= "insert into loaiphim(tênloai_phim) values('$tenloaiphim')";
         mysqli_query($connect, $sql); 
         mysqli_close($connect);
         header('location:../../index.php?quanly=quanlyloaiphim&ac=them');
	//thêm
	}elseif (isset($_POST['sua'])) {
		$sql="update loaiphim set tênloai_phim='$tenloaiphim' where id_loaiphim='$id'";
		mysqli_query($connect,$sql);
		         mysqli_close($connect);
		header('location:../../index.php?quanly=quanlyloaiphim&ac=sua&id='.$id);
	//sửa
	}else{
		$sql="delete from loaiphim where id_loaiphim='$id'";
		mysqli_query($connect,$sql);
		         mysqli_close($connect);
		header('location:../../index.php?quanly=quanlyloaiphim&ac=them');
	//xóa
	}
?>