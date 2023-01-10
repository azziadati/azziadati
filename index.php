
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="srii.css">
   
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login guys</h2>
        <form action="" method="POST">
        <div class="input-container">
            <i class="fa fa-user"></i>
            <input type="text" name="nama" placeholder="username" class="input-control">
        </div>
        <div class="input-container">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="password" required class="input-control">
            <i name="show-password" class="fa fa-eye"></i>
          </div>
            <input type="submit" name="submit" value="login" class="button">
		</form>
	
 <?php

  if (isset($_POST['submit'])){
    include "koneksi.php";
    $nama = $_POST['nama'];
    $password = sha1($_POST['password']);
	
    $query = mysqli_query($conn,"SELECT * FROM admin WHERE nama='$nama' AND password='$password' ");
    $cek= mysqli_num_rows($query);
   if($cek > 0 ) {
     session_start();
     $_SESSION['username']=$username;
     $_SESSION['status']="login";
     echo "<script>alert; window.location.href='dashboard.php'</script>";
   }else{
    echo "<script>alert('Username atau Password anda salah'); window.location.href='index.php'</script>";
   }

	
  }
  ?>
</div>
</body>
</html>