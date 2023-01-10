<?php
include "header.php";
include "koneksi.php";

$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM user WHERE id_user='$id'");
  while ($tabel = mysqli_fetch_array($sql)) 
  {

  
?>
     <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Data</h3>
              
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                   <form class="forms-sample" method="POST">
                      <div class="form-group row">
                        <label for="exampleInputprojectname" class="col-sm-3 col-form-label">PROJECT NAME</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="project_name" name="project_name" value="<?php echo $tabel['project_name']; ?>" />
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="exampleInputclient" class="col-sm-3 col-form-label">CLIENT</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="client" name="client" value="<?php echo $tabel['client']; ?>" />
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="exampleInputprojectleader" class="col-sm-3 col-form-label">PROJECT LEADER</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="project_leader" name="project_leader" value="<?php echo $tabel['project_leader']; ?>" />
                       </div>
                      </div>				  
                      <div class="form-group row">
                        <label for="exampleInputstartdate" class="col-sm-3 col-form-label">START DATE</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="start_date" name="start_date" value="<?php echo $tabel['start_date']; ?>" />
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="exampleInputenddate" class="col-sm-3 col-form-label">END DATE</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="end_date" name="end_date" value="<?php echo $tabel['end_date']; ?>" />
                        </div>
                      </div>
                      
                      
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  <?php } ?>
                  </div>
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
            $project_name = $_POST['project_name'];
			$client = $_POST['client'];
            $project_leader = $_POST['project_leader'];
            $start_date= $_POST['start_date'];
			$end_date= $_POST['end_date'];
            $sql = mysqli_query($conn, "UPDATE user SET project_name='$project_name',client='$client',project_leader='$project_leader',start_date='$start_date',end_date='$end_date' WHERE id_user='$id'");

            echo
            "<script>window.location.href='data_user.php'</script>";
          }



          ?>