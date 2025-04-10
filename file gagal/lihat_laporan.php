<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laporan Anda</title>
        <link rel="shortcut icon" href="../log/img/jatim.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Pengaduan Anda</a>
            <!-- Sidebar Toggle-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Riwayat</div>
                            <a class="nav-link" >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data Pengaduan
                            </a>
                            <a class="nav-link" href="masyarakat.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-backward"></i></div>
                                Kembali
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Aplikasi Pengaduan Masyarakat</div>
                       B-LAPOR
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Laporan <?php echo $_SESSION['nama']?></h1>
                        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align:center">
                  <thead>
                  <tr>
                    <th>No</th>
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
                    $no = 1;
                    $nik=$_SESSION['nik'];
                    $tampil=mysqli_query($koneksi,"select * from pengaduan where nik='$nik'");
                    while($data=mysqli_fetch_array($tampil)) {                  
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['tgl_pengaduan'] ?></td>
                      <td><?php echo $data['isi_laporan'] ?></td>
                      <td><?php echo $data['foto'] ?></td>
                      <td>
                        <?php  
                            if($data['status'] == '0'){
                                echo "Belum diproses";
                            }else if($data['status'] == 'proses'){
                                echo "Sudah diverifikasi";
                            }else{
                                echo "Selesai";
                            }
                        ?>
                      </td>
                     
                      <td>
                      <?php
                            if($data['status'] == '0'){
                        ?>
                        <a href="detail.php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-success btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-info"></i>
                          </span>
                          <span class="text px-4">Lihat Detail</span>
                        </a>
                        <a href="edit.php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-warning btn-icon-split" onclick="return confirm('Anda yakin untuk mengubah laporan?')">
                            <span class="icon text-white-50">
                                <i class="fa-solid fa-pen"></i>
                            </span>
                        </a>
                        <?php
                            }else if($data['status'] == 'proses'){
                        ?>
                            <a href="detail.php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info"></i>
                                </span>
                                <span class="text px-4">Lihat Detail</span>
                            </a>
                        <?php
                            }else{
                        ?>
                            <a href="tanggapan.php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-eye"></i>
                            </span>
                            <span class="text">Lihat Tanggapan</span>
                            </a>
                        <?php
                            }
                        ?>
                        <a href="../proses/hapus.php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-danger btn-icon-split" onclick="return confirm('Anda yakin untuk menghapus laporan?')">
                            <span class="icon text-white-50">
                                <i class="fa-solid fa-trash"></i>
                            </span>
                        </a>
                        
                      </td>
                    </tr>
                  <?php
                   }
                  ?>
                  </tbody>
                </table>
              </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
