<?php
session_start();
  if(!isset($_SESSION['user'])){
    header("location:../log/login_admin.php");
  }
// SEANDAINYA DIKASIH SESSION TIDAK BISA MENGARAH KE HALAMAN PETUGAS ?
?>

<?php
    include "../template/petugas/header.php"
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="mt-4 mb-4 fs-2 fw-bolder">Laporan Masyarakat yang perlu di Tanggapi
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
                    $tampil=mysqli_query($koneksi,"select * from pengaduan where status='proses'");
                    while($data=mysqli_fetch_array($tampil)) {                  
                  ?>
                    <tr>
                      <td><?php echo $data['id_pengaduan'] ?></td>
                      <td><?php echo $data['nik'] ?></td>
                      <td><?php echo $data['tgl_pengaduan'] ?></td>
                      <td><?php echo $data['isi_laporan'] ?></td>
                      <td><?php echo $data['foto'] ?></td>
                      <td><?php echo $data['status'] ?></td>
                      <td>
                        <a href="form_tanggapan.php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-primary btn-icon-split">
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
<?php
 include "../template/footer.php"  
?>

