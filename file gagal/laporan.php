<?php
session_start();
  if(!isset($_SESSION['nama'])){
    header("location:../log/login_admin.php");
  }
?>
<?php
 include "../template/header.php"
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="mt-4 mb-4 fs-2 fw-bolder">Laporan Masyarakat
                            <!-- <button type="button" class="btn btn-success my-4 shadow-lg rounded-pill ml-4">Success</button> -->
                        </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align:center">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "../proses/koneksi.php";
                    // $no = 1;
                    $tampil=mysqli_query($koneksi,"select * from pengaduan");
                    while($data=mysqli_fetch_array($tampil)) {                  
                  ?>
                    <tr>
                      <td><?php echo $data['id_pengaduan'] ?></td>
                      <td><?php echo $data['nik'] ?></td>
                      <td><?php echo $data['tgl_pengaduan'] ?></td>
                      <td><?php echo $data['isi_laporan'] ?></td>
                      <td><?php echo $data['foto'] ?></td>
                      <td><?php echo $data['status'] ?></td>
                      <!-- <td class="flex flex-wrap">
                        <a href="form_edit.php?id=<?php echo $data['id_pengaduan'];?>" class="border-2 bg-blue-500 font-semibold rounded-md shadow-md mr-1 px-3 w-24 py-1 hover:bg-slate-200">Edit</a>
                        <a href="hapus.php?id=<?php echo $data['id_pengaduan'];?>" class="border-2 bg-red-500 font-semibold rounded-md shadow-md px-2 w-24 py-1 hover:bg-slate-200">Delete</a>
                      </td> -->
                      <td>
                        <a href="detail.php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-success btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-info"></i>
                          </span>
                          <span class="text">Lihat Detail</span>
                        </a>
                        <a href="tanggapann..php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-eye"></i>
                          </span>
                          <span class="text">Beri Tanggapan</span>
                        </a>
                      </td>
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

