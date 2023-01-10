 <?php 
include "header.php"; 
include "koneksi.php";

$ids=$_GET['id'];

     $sql=mysqli_query($conn,"select*from admin where id_admin='$ids'");
	 
	 //Tabel
	 while ($td=mysqli_fetch_array($sql))
	 {
?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Tambah Data Admin</h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" name="nama1" value="<?php echo $td['nama']; ?>" class="form-control" id="exampleInputUsername1" placeholder="Username" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password1" value="<?php echo $td['password']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button type="reset" class="btn btn-light">Reset</button>
                    </form>
	 <?php } ?>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php include "kaki.php";
		  if (isset($_POST['submit']))
	{
    $nama= $_POST['nama1'];
	$sql=mysqli_query ($conn, "UPDATE admin SET nama='$nama' where id_admin='$ids'");
	echo "<script>window.location.href='data_admin.php'</script>";
	}
	?>

?>
     