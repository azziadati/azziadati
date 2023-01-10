<?php
include "header.php";
include "koneksi.php";
?>
      <!-- partial -->
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PROJECT MONITORING</h4>
					
					<table align="right">
						<tr>
							<td>
							<a href="tambah_user.php"> 
								<button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
								<i class="mdi mdi-plus-circle"></i> Tambah Data
								</button>
							<a/>
							</td>
						</tr>
					</table>
				
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr class="table-info">
                            <th>PROJECT NAME</th>
                            <th>CLIENT</th>
                            <th>PROJECT LEADER</th>
							<th>START DATE</th>
							<th>END DATE</th>
							<th>ACTIONS</th>
                          </tr>
                        </thead> 
                        <tbody>
						<?php
							$no=0;
							// panggil tabel
							$sql = 'select*from user';
							$query = mysqli_query($conn, $sql);
		
							//tabel
							while ($td = mysqli_fetch_array($query))
									{
							$no++;
							?>
                          <tr>
                            <td><?php echo $td['project_name'];?></td>
							<td><?php echo $td['client'];?></td>
							<td><?php echo $td['project_leader'];?></td>
							<td><?php echo $td['start_date'];?></td>
							<td><?php echo $td['end_date'];?></td>
							<td align="center">
							<!-- button hapus -->
								<a href="data_user.php?hapus=<?php echo $td['id_user']; ?>">
								<button type="button" class="btn btn-danger btn-rounded btn-icon">
									<i class="mdi mdi-delete-forever"></i>
								</button>
								</a>
							<!-- button edit -->	
								<a href="edit_user.php?id=<?php echo $td['id_user']; ?>">
								<button type="button" class="btn btn-success btn-rounded btn-icon">
									<i class="mdi mdi-pencil-box"></i>
								</button>
								</a>
							</td>
                          </tr>
									<?php }
									
						if (isset($_GET['hapus']))
						{
							$id_user = $_GET['hapus'];
							$sql = mysqli_query($conn,"DELETE FROM user WHERE id_user ='$id_user'");
							
							if ($sql) {
								//pesan apabila hapus berhasil
									echo "<script>alert('Data berhasil dihapus'); window.location.href='data_user.php'</script>";
	
								} else {
								//pesan apabila hapus gagal
									echo "<script>alert('Data GAGAL dihapus'); window.location.href='data_user.php'</script>";
								}
						}
						
						?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
		  <?php include "kaki.php";?>