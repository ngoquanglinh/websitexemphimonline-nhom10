<?php
	include("../config.php");
	$id=$_GET['id'];
	$tenphim=$_POST['tenphim'];
	$linkphim=$_POST['linkphim'];
	$ten_english=$_POST['ten_english'];
	$loaiphim=$_POST['loaiphim'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	if(isset($_POST['them'])){
		$sql= "INSERT INTO chitiet_phim(tenphim,linkphim,anh,ten_english,id_loaiphim) VALUES('$tenphim','$linkphim','$hinhanh','$ten_english','$loaiphim')";
		echo $sql;
         mysqli_query($connect, $sql); 
         mysqli_close($connect);
         header('location:../../index.php?quanly=quanlychitietphim&ac=them');
	//thêm
	}elseif (isset($_POST['sua'])) {
		if($hinhanh != ' '){
		$sql="UPDATE chitiet_phim SET tenphim='$tenphim',linkphim='$linkphim',anh='$hinhanh',ten_english='$ten_english',id_loaiphim='$loaiphim' where id_phim='$id'";
		}else{
			$sql="UPDATE chitiet_phim set tenphim='$tenphim',linkphim='$linkphim',ten_english='$ten_english',id_loaiphim='$id_loaiphim' WHERE id_phim='$id'";
		}
		mysqli_query($connect,$sql);
		         mysqli_close($connect);
		header('location:../../index.php?quanly=quanlychitietphim&ac=sua&id='.$id);
	}else{
		$sql="DELETE FROM chitiet_phim WHERE id_phim='$id'";
		mysqli_query($connect,$sql);
		         mysqli_close($connect);
		header('location:../../index.php?quanly=quanlychitietphim&ac=them');
	//xóa
	}
?>