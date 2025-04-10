<?php
session_start();
  if(!isset($_SESSION['user'])){
    header("location:../log/login_admin.php");
  }
?>
<?php
    include "../template/header.php"
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="mt-4 mb-4 fs-2 fw-bolder">Data Admin dan Petugas</div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align:center">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Telp</th>
                    <th>Level</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "../proses/koneksi.php";
                    // $no = 1;
                    $tampil=mysqli_query($koneksi,"select * from petugas");
                    $cek=mysqli_num_rows($tampil);
                    if ($cek>0) {
                    while($data=mysqli_fetch_array($tampil)) {                  
                  ?>
                    <tr>
                      <td><?php echo $data['id_petugas'] ?></td>
                      <td><?php echo $data['nama_petugas'] ?></td>
                      <td><?php echo $data['username'] ?></td>
                      <td><?php echo $data['password'] ?></td>
                      <td><?php echo $data['telp'] ?></td>
                      <td><?php echo $data['level'] ?></td>
                      <td>
                        <a href="../proses/hapus_petugas.php?id=<?php echo $data['0'];?>" class="my-1 btn btn-danger btn-icon-split" onclick="return confirm('Anda yakin untuk menghapus Data Ini?')">
                              <span class="icon text-white-50">
                                  <i class="fa-solid fa-trash"></i>
                              </span>
                        </a>
                        <a href="edit_petugas.php?id=<?php echo $data['0'];?>" class="my-1 btn btn-warning btn-icon-split" onclick="return confirm('Anda yakin untuk mengedit Data Ini?')">
                              <span class="icon text-white-50">
                                  <i class="fa-solid fa-pencil"></i>
                              </span>
                        </a>
                      </td> 
                    </tr>
                  <?php
                  } 
                } else {
                 ?>
                  <tr>
                    <td colspan="7">Belum Ada Laporan Dari Masyarakat</td>
                  </tr>
                 <?php
                }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                    </div>
                </main>
                
            </div>
        </div>
    </body>
</html>

<?php
  include "../template/footer.php"  
?>

