<?php
session_start();
  if(!isset($_SESSION['user'])){
    header("location:../log/login_admin.php");
  }
// SEANDAINYA DIKASIH SESSION TIDAK BISA MENGARAH KE HALAMAN PETUGAS ?
?>

<?php
    include "../template/header.php"
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="mt-4 mb-4 fs-2 fw-bolder">Data Laporan Harian
                <!-- <button type="button" class="btn btn-success my-4 shadow-lg rounded-pill ml-4">Success</button> -->
            </div>
            <button class="btn btn-danger btn-icon-split" onclick="frames['frame'].print();">
                <span class="icon text-white-50">
                    <i class="fas fa-print"></i>
                </span>
                <span class="text-white">Cetak Data Ke PDF</span>
            </button>
            <a target="_blank" href="../proses/exel.php" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-print"></i>
                </span>
                <span class="text-white">Cetak Data Ke EXCEL</span>
            </a>
            <iframe src="ctk.php" name="frame" width="100%" height="1300"></iframe>
        </div>
    </main>    
</div>
<?php
    include "../template/footer.php"  
?>

