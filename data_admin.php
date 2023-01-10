<?php 
include "header.php";
include "koneksi.php";
?>
	  <!-- partial -->
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Admin</h4>  

                     <table align="right">
                         <tr>
               				 <td>
							     <a href="tambah_admin.php">
							     <button type "button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text"><i class="mdi mdi-plus-circle"></i> Tambah Data Admin </button>
								 </a>
							 </td>
						 </tr>
					 </table>
					 
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr class="table-info" align="center">
                            <th>No</th>
                            <th>Nama Admin</th>
							<th>Password</th>
                            <th>Aksi</th>                          
                          </tr>
                        </thead>
                        <tbody>
						<?php
							$no=0;
							//panggil tabel
							$sql = 'select*from admin';
							$query = mysqli_query($conn, $sql);
							
							//cek relasi
							if (!$query) {
								die ('kayee jak error: ' .
								mysqli_error($conn));
							}
							
							//tabel
							while ($td =mysqli_fetch_array($query))
									{
										
							$no++;
							?>
							
							 <tr >
								<td><?php echo $no;?></td>
								<td><?php echo $td['nama'];?></td>
								<td><?php echo $td['password'];?></td>
								<td align="center">
								<!-- button hapus -->
								
								    <a href="data_admin.php?hapus=<?php echo $td['id_admin']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon">
									<i class="mdi mdi-delete-forever"></i>
								
								</button> 
								</a>	
								<!-- button edit -->
								
								<a href="edit_admin.php?id=<?php echo $td['id_admin']; ?>"><button type="button" class="btn btn-success btn-rounded btn-icon">
									<i class="mdi mdi-pencil-box"></i>
								
								</button> 
								</a>	
									
									
								 </td>
							 </tr>
									
						     <?php }
									
						
							if (isset($_GET['hapus']))
							{
							$id_admin = $_GET['hapus'];
							$sql = mysqli_query($conn,"DELETE FROM admin WHERE id_admin ='$id_admin'");
							

							if ($sql) {
								// pesan apabila hapus berhasil
									echo "<script>alert('Data berhasil dihapus'); window.location.href='data_admin.php'</script>";
	
								} else {
								// pesan apabila hapus gagal
									echo "<script>alert('Data GAGAL dihapus'); window.location.href='data_admin.php'</script>";
								}
							}
						
						
							  ?>																
								 </td>
							 </tr>								
                         </tbody>
                     </table>
                 </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        <?php include "kaki.php" ?>