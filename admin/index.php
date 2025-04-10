<?php
session_start();

    if($_SESSION['folder']!=='admin') {
    // header("location:../log/login_admin.php?pesan=andabukanadmin");
?>
    <script type="text/javascript">
        alert ('Anda bukan Admin');
        window.location="../log/login_admin.php"
    </script>
<?php
    };
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
            <div class="mt-4 mb-4 fs-1 fw-bolder">Beranda</div>
            <?php
                include "../proses/koneksi.php";
                $tampil=mysqli_query($koneksi,"select * from pengaduan where status='0'");
                if ($cek=mysqli_num_rows($tampil))
                {
            ?>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body"><a href="verifikasi.php"><?php echo $cek; ?> Laporan Dari Masyarakat</a></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="badge badge-danger badge-counter"><?php echo $cek; ?></a>
                            <div class="small text-white"><a href="#" class="fas fa-angle-right"></a></div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
                $proses=mysqli_query($koneksi,"select * from pengaduan where status='proses'");
                if ($pros=mysqli_num_rows($proses))
                {
            ?>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body"><a href="terverifikasi.php"><?php echo $pros; ?> Masih di Tanggapi</a></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="badge badge-danger badge-counter"><?php echo $pros; ?></a>
                            <div class="small text-white"><a href="#" class="fas fa-angle-right"></a></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <?php
                $selesai=mysqli_query($koneksi,"select * from pengaduan where status='selesai'");
                if ($sele=mysqli_num_rows($selesai))
                {
            ?>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body"><a href="data_pengaduan.php"><?php echo $sele; ?> Sudah di Tanggapi</a></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="badge badge-danger badge-counter"><?php echo $sele; ?></a>
                            <div class="small text-white"><a href="#" class="fas fa-angle-right"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </main>
</div>
<?php
 include "../template/footer.php"  
?>