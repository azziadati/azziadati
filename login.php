<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="bg-info">
  
     <div class="container mt-5">
	    <div class="card w-50 shadow-lg p-3 mb-5">
		     <div class="card-body">
			     <h5 class="card-title text-center"><b>Form Login</b></h5><hr>
				 <form action=""method="POST">
				     <div class="form-group">
					     <label for="">Nama</label>
						 <input type="text" name="nama" class="form-control"
						 placeholder="Masukkan Nama Anda"
				     </div>
					 <div class="form-group">
					     <label for="">Password</label>
						 <input type="Password" name="Password" class="form-control"
						 placeholder="Masukkan Password Anda"
					 </div>
				     <div class="d-grid gap-2 mt-3">
					     <button type="submit" name="login" class="btn btn-info">Login</button>
					 </div>
				 </form>	  
			</div>
		</div>
	</div>
	<?php
	     session_start();
		 include "koneksi.php";
		 if (isset($_POST['login'])) {
			 $nama=$_POST['nama'];
			 $password= MD5($_POST['password']);
			 $query=mysqli_query($conn,"SELECT * FROM admin WHERE nama='$nama' AND password='$password' ");
			 $rows=mysqli_fetch_array($query);
			 if ($rows) {
				 $_SESSION['login']=$rows;
				 $_SESSION['nama']=$nama;
				 echo "<script>location='index.php'</script>";
			 }else{
				 echo"<script>alert('Gagal Login Silahkan Coba Lagi Zeyenggg')></script>";
				 echo"<script>location='login.php'></script>";
			 }
		 }
	?>
				 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>