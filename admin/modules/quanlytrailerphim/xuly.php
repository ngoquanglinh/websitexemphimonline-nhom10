<?php
	include("../config.php");
	$id=$_GET['id'];
	$tenphim=$_POST['tenphim'];
	$linkphim=$_POST['linkphim'];
	$ten_english=$_POST['ten_english'];
	$loaiphim=$_POST['loaiphim'];
	$noidung=$_POST['noidung'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'../quanlychitietphim/uploads/'.$hinhanh);
	if(isset($_POST['them'])){
		$sql= "INSERT INTO trailer(tenphim_trailer,link_trailer,image_trailer,tenenglish_trailer,noidung_trailer,id_loaiphim) VALUES('$tenphim','$linkphim','$hinhanh','$ten_english','$noidung','$loaiphim')";
		echo $sql;
         mysqli_query($connect, $sql); 
         mysqli_close($connect);
         header('location:../../index.php?quanly=quanlytrailerphim&ac=them');
	//thêm
	}elseif (isset($_POST['sua'])) {
		if($hinhanh != ' '){
		$sql="UPDATE trailer SET tenphim_trailer='$tenphim',link_trailer='$linkphim',image_trailer='$hinhanh',tenenglish_trailer='$ten_english',id_loaiphim='$loaiphim' WHERE id_trailer='$id'";
		}else{
			$sql="UPDATE chitiet_phim set tenphim='$tenphim',linkphim='$linkphim',ten_english='$ten_english',id_loaiphim='$id_loaiphim' WHERE id_phim='$id'";
		}
		mysqli_query($connect,$sql);
		         mysqli_close($connect);
		header('location:../../index.php?quanly=quanlytrailerphim&ac=sua&id='.$id);
	}else{
		$sql="DELETE FROM trailer WHERE id_trailer='$id'";
		mysqli_query($connect,$sql);
		         mysqli_close($connect);
		header('location:../../index.php?quanly=quanlytrailerphim&ac=them');
	//xóa
	}
?>