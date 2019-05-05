<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../js/bootstrap.min.js">
  <link rel="stylesheet" href="../fontawesome/fontawesome-free-5.7.2-web/css/all.min.css" type="text/css">
  
</head>
<body>
  <?php
  include('modules/config.php');
  session_start();
  if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql_dangnhap="select * from user where username='$username' and password='$password' limit 1";
    $run_dangnhap=mysqli_query($connect,$sql_dangnhap);
    $count_dangnhap=mysqli_num_rows($run_dangnhap);
    if($count_dangnhap>0){
      $_SESSION['dangnhap']=$username;
      header('location:index.php');
    }
    else{
      header('location:login.php');
    }
  }
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <div class="col-md-4 col-md-offset-4 login">
         <h1>Login</h1>
         <form action="" method="post" enctype="multipart/form-data">
          <input type="text" name="username" value="" placeholder="Username">
          <input type="password" name="password" value="" placeholder="Password">
          <button type="submit" class="btn btn-success btn-group-justified" name="login">Login</button>
        </form>
      </div>  
    </div>
  </div>
</div>

<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
