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
        <title>Detail Laporan Anda</title>
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
                            <a class="nav-link">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data Pengaduan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Aplikasi Pengaduan Masyarakat</div>
                        B-LAPOR
                    </div>
                </nav>
            </div>
            
            <?php
include "../proses/koneksi.php";
$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "select * from pengaduan, tanggapan  where tanggapan.id_pengaduan='$id' and tanggapan.id_pengaduan=pengaduan.id_pengaduan");
$hasil = mysqli_fetch_array($tampil);
?>

<div id="layoutSidenav_content">  
  <form action="" method="POST">
    <div class="card-body">
      <div class="fs-4 fw-bolder mb-3">Tanggapan</div>
      <div class="form-group cols-sm-6 my-2">
        <a href="lihat_laporan.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
          </span>
          <span class="text">Kembali</span>
        </a>
      </div>
      <div class="form-group ">
        <label for="exampleInputEmail1" class="fs-5">ID Pengaduan</label>
        <input type="text" class="form-control" placeholder="Masukan Nama Menu" readonly  name="id_pengaduan" value="<?php echo $hasil['id_pengaduan']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="fs-5">NIK</label>
        <input type="text" class="form-control" placeholder="Masukan Nama Menu" readonly  name="nik" value="<?php echo $hasil['nik']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="fs-5">Tanggal Pengaduan</label>
        <input type="text" class="form-control" placeholder="Harga" readonly  name="tgl_pengaduan" value="<?php echo $hasil['tgl_pengaduan']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="fs-5">Laporan</label>
        <textarea type="text" rows="4" class="form-control" name="isi_laporan" readonly value=""><?php echo $hasil['isi_laporan']?></textarea>
      </div>
      <div>
        <div class="form-group">
            <label class="fs-5">Bukti Foto</label>
            <img src="../img_laporan/<?php echo $hasil['foto']?>" class="rounded-3 form-control w-50" readonly />
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1" class="fs-5">Tanggapan</label>
        <textarea type="text" rows="4" class="form-control" name="tanggapan" readonly><?php echo $hasil['tanggapan']?></textarea>
      </div>
      
    </div>
  </form>  
</div>

            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>