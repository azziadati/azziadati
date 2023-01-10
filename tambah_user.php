<?php 
include "header.php"; 
include "koneksi.php";

if (isset($_POST ['submit']))
			{
				$project_name= $_POST['project_name'];
				$client= $_POST['client'];
				$project_leader= $_POST['project_leader'];
				$start_date= $_POST['start_date'];
				$end_date= $_POST['end_date'];
				$sql = mysqli_query ($conn, "insert into user values ('','$project_name','$client','$project_leader','$start_date','$end_date')");
				
				echo"<script>window.location.href='data_user.php'</script>";
			}
?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Tambah Data</h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputprojectname">PROJECT NAME</label>
                        <input type="text" name="project_name" class="form-control" id="exampleInputprojectname" placeholder="PROJECT NAME" />
                      </div>
					  <div class="form-group">
                        <label for="exampleInputclient">CLIENT</label>
                        <input type="text" name="client" class="form-control" id="exampleInputclient" placeholder="CLIENT" />
                      </div>					  
					  <div class="form-group">
                        <label for="exampleInputprojectleader">PROJECT LEADER</label>
                        <input type="text" name="project_leader" class="form-control" id="exampleInputprojectleader" placeholder="PROJECT LEADER" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputstartdate">STAR DATE</label>
                        <input type="date" name="start_date" class="form-control" id="exampleInputstartdate" placeholder="START DATE" />
                      </div>
					  <div class="form-group">
                        <label for="exampleInputenddate">END DATE</label>
                        <input type="date" name="end_date" class="form-control" id="exampleInputenddate" placeholder="END DATE" />
                      </div>
					  <div class="form-group">
                        <label for="exampleInputprogress">PROGRESS</label>
                        <input type="text" name="progress" class="form-control" id="exampleInputprogress" placeholder="PROGRESS" />
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button type="reset" class="btn btn-light">Reset</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
		  
<?php include "kaki.php";?>