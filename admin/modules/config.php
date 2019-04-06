<?php
      $server="localhost";
      $tentaikhoan="root";
      $pass="";
      $dbname="websitexemphim";
   $connect=mysqli_connect($server,$tentaikhoan,$pass,$dbname) or die('không thể kết nối');
   mysqli_set_charset($connect, 'UTF8');
   mysqli_select_db($connect,$dbname);
?>