<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>B-Lapor</title>
<link rel="shortcut icon" href="../log/img/jatim.png" type="image/x-icon">
<meta content="" name="description">
<meta content="" name="keywords">
<script src="https://cdn.tailwindcss.com"></script>

<!-- Favicons -->

<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="assets/css/cssku.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="">B-Lapor</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto" href="masyarakat.php#why-us">Kembali</a></li>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header><!-- End Header -->

<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3>Form Edit Laporan Anda</h3>
        <p>Form Edit Laporan Anda Dapat Merubah Data Laporan Anda disini</p>
      </header>
      <?php
      include "../proses/koneksi.php";
      $id = $_GET['id'];
      $tampil = mysqli_query($koneksi, "select * from pengaduan where id_pengaduan='$id'")or die(mysql_error());
      $hasil = mysqli_fetch_array($tampil);
      ?>

      <div id="layoutSidenav_content">  
        <form action="../proses/edit_pengaduan.php" method="POST" enctype="multipart/form-data">
          <div class="card-body">
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
              <textarea type="text" rows="4" class="form-control" name="isi_laporan" value=""><?php echo $hasil['isi_laporan']?></textarea>
            </div>
            <div class="form-group">
              <label class="fs-5">Bukti Foto</label>
              <img src="../img_laporan/<?php echo $hasil['foto']?>" class="w-68 px-3 py-4 rounded-3" width="600px"/>
            </div>
            <div class="form-group">
                  <label class="fs-5">Ubah Foto</label>
                   <input type="file" class="form-control" name="foto">
                  <p style="color:red">Ekstensi yang diperbolehkan  .png | .jpg | .gif</p>
                </div>
            <div class="px-2">
                <button type="submit" name="oke" class="bg-yellow-500 mt-4 text-white btn btn-warning btn-icon-split">
                    Submit
                </button>
            </div>
            
          </div>
        </form>  
      </div>
  </div>
</section>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/scriptku.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>