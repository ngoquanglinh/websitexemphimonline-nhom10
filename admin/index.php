<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../js/bootstrap.min.js">
	<link rel="stylesheet" href="../fontawesome/fontawesome-free-5.7.2-web/css/all.min.css" type="text/css">
  
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION['dangnhap'])){
			header('location:login.php');
		}
	?>
	<div>
		<?php 
		include('modules/config.php');
		include('modules/header.php');
		include('modules/content.php');
		?>
	</div>
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>