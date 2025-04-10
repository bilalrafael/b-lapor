<?php
session_start();
  if(!isset($_SESSION['user'])){
    header("location:../log/login_admin.php");
  }
?>
<?php
  include "../template/header.php"
?>

<?php
include "../proses/koneksi.php";
$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "select * from pengaduan where id_pengaduan='$id'");
// $hasil = mysqli_fetch_array($tampil);
while($hasil=mysqli_fetch_array($tampil)) {
?>

<div id="layoutSidenav_content">  
  <form action="p_input_menu.php" method="POST">
    <div class="card-body">
      <div class="fs-4 fw-bolder mb-3">Detail Pengaduan</div>
      <div class="form-group cols-sm-6 my-2">
        <a href="verifikasi.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
          </span>
          <span class="text">Kembali</span>
        </a>
        <a href="../proses/verifikasi_petugas.php?id=<?php echo $hasil['id_pengaduan'];?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin untuk verifikasi ?')">
          <span class="icon text-white-50">
            <i class="fa-solid fa-check"></i>
          </span>
          <span class="text">Verifikasi</span>
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
      <div class="form-group">
        <label class="fs-5">Bukti Foto</label>
        <img src="../img_laporan/<?php echo $hasil['foto']?>" class="rounded-3 form-control" readonly width="600px"/>
      </div>
    </div>
  </form>  
</div>
<?php
}
?>
<?php
 include "../template/footer.php"  
?>