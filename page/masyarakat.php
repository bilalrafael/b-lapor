<?php
session_start();
  if(!isset($_SESSION['nik'])){
    header("location:../index.php");
  }
?>

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
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">Lapor</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto " href="#why-us">Laporan Anda</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
            <li class="dropdown"><a href="#"><span><?php echo $_SESSION['nama']?></span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="../log/logout.php" onclick="return confirm('Anda yakin untuk logout?')">Log Out</a></li>
              </ul>
            </li> 
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>

    <!-- ======= Landing Page ======= -->
    <section id="hero" class="clearfix">
      <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center" data-aos="fade-up">
          <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
            <h2>Aplikasi Pengaduan Masyarakat Desa <span>Gadungan</span></h2>
            <div>
              <a href="#about" class="btn-get-started scrollto">Laporkan Masalah</a>
            </div>
          </div>

          <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
          </div>
        </div>

      </div>
    </section>

    <main id="main">

      <!-- ======= Form Lapor ======= -->
      <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row">

            <div class="col-lg-5 col-md-6">
              <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/gadungan.jpg" alt="">
              </div>
              <div>
            </div>
            </div>
            <?php
              include "../proses/koneksi.php";
            ?>
            <div class="col-lg-7 col-md-6">
              <header class="section-header">
                <h3>Form Lapor</h3>
              </header>
              <form action="../proses/input_laporan.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" value="<?php echo $_SESSION['nama']?>" readonly>
                  </div>
                  <div class="form-group">  
                    <label for="exampleInputEmail1">Tanggal Pengaduan</label>
                    <input type="text" class="form-control" name="tgl_pengaduan" value="<?php echo date('d/m/y');?>" readonly>
                  </div>
                  <div class="form-group">  
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" name="nik" value="<?php echo $_SESSION['nik'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi Laporan</label>
                    <textarea rows="7" class="form-control" placeholder="Masukan Laporan" name="isi_laporan"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Unggah Foto</label>
                    <input type="file" class="form-control" name="foto">
                    <p style="color:red">Ekstensi yang diperbolehkan  .png | .jpg | .gif</p>
                  </div>
                  <div>
                    <div class="flex flex-wrap ml-4 my-2">
                      <div class="px-2">
                        <button type="submit" name="simpan" class="bg-blue-600 btn btn-primary">Submit</button>
                      </div>
                      <div class="px-2">
                        <button type="reset" class="bg-blue-600 btn btn-primary">Reset</button>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>

      </section>

      <!-- ======= Service yang ada di B-lapor ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3>Services</h3>
            <p>Contoh Hal Hal Yang Dapat Di Laporkan di Aplikasi B-Lapor</p>
          </header>

          <div class="row g-5">

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
              <div class="box">
                <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Infrastruktur Desa</a></h4>
                <p class="description">Laporkan Tentang Infrastruktur Desa Gadungan Agar Pembangunan Merata</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="box">
                <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
                <h4 class="title"><a href="">Kesejahteraan Rakyat</a></h4>
                <p class="description">Laporkan Tentang Kesejahteraan Rakyat Desa Gadungan</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="box">
                <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">Sistem Keamanan</a></h4>
                <p class="description">Jika Ada Masalah Tentang Keamanan Desa Gadungan Silahkan Melaporkan</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow" data-ao s="zoom-in" data-aos-delay="100">
              <div class="box">
                <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                <h4 class="title"><a href="">Kerukunan Warga</a></h4>
                <p class="description">Jika Ada Masalah Dengan Warga Bisa Di Laporkan</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
          <div class=" box">
              <div class="icon" style="background: #e1eeff;"><i class="bi bi-brightness-high" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Kesehatan</a></h4>
              <p class="description">Laporkan Jika Terdapat Fasilitas Kesehatan Yang Kurang Memadai di Desa Gadungan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">Bahan Pangan Masyarakat</h4>
              <p class="description">Laporkan Bila Ada Masalah Tentang Bahan Pokok di Desa</p>
            </div>
          </div>

        </div>

        </div>
      </section>

      <!-- ======= Laporan User ======= -->
      <section id="why-us" class="why-us">
        <div class="container-fluid" data-aos="fade-up">

          <header class="section-header">
            <h3>Laporan Anda</h3>
            <p></p>
          </header>

          <div id="layoutSidenav_content">
                  <main>
                      <div class="container-fluid px-4">
                          <h1 class="mb-3 text-2xl font-semibold">Laporan <?php echo $_SESSION['nama']?></h1>
                          <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped" style="text-align:center">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Tanggapan</th>
                      <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                      include "../proses/koneksi.php";
                      $no = 1;
                      $nik=$_SESSION['nik'];
                      $tampil=mysqli_query($koneksi,"select * from pengaduan left join tanggapan on pengaduan.id_pengaduan=tanggapan.id_pengaduan where nik='$nik' order by tgl_pengaduan desc");
                      $cek=mysqli_num_rows($tampil);
                      if ($cek>0) {
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
                          <?php echo $data['tanggapan'];
                            if(empty($data['tanggapan'])){
                                echo "Laporan Anda Belum diTanggapi";
                              }
                          ?>
                        </td>                
                        <td>
                          <a href="detail.php?id=<?php echo $data['0'];?>" class="third my-1 btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="bi-solid bi-eye"></i>
                            </span>
                          </a>
                        <?php
                              if($data['status'] == '0'){
                          ?>
                          <a href="edit.php?id=<?php echo $data['0'];?>" class="my-1 btn btn-warning btn-icon-split" onclick="return confirm('Anda yakin untuk mengubah laporan?')">
                              <span class="icon text-white-50">
                                  <i class="bi-solid bi-pencil"></i>
                              </span>
                          </a>
                          <?php
                              }else if($data['status'] == 'proses'){
                          ?>
                          <a class="my-1 invisible btn btn-warning btn-icon-split" onclick="return confirm('Anda yakin untuk mengubah laporan?')">
                              <span class="icon text-white-50">
                                  <i class="bi-solid bi-pen"></i>
                              </span>
                          </a>
                          <?php
                              }else{
                          ?>
                          <a class="my-1 invisible btn btn-warning btn-icon-split" onclick="return confirm('Anda yakin untuk mengubah laporan?')">
                              <span class="icon text-white-50">
                                  <i class="bi-solid bi-pen"></i>
                              </span>
                          </a>
                          <?php
                              }
                          ?>
                          <a href="../proses/hapus.php?id=<?php echo $data['0'];?>" class="my-1 btn btn-danger btn-icon-split" onclick="return confirm('Anda yakin untuk menghapus laporan?')">
                              <span class="icon text-white-50">
                                  <i class="bi-solid bi-trash"></i>
                              </span>
                          </a>
                          
                        </td>
                      </tr>
                    <?php
                    } } else {
                        ?>
                         <tr>
                           <td colspan="7">Anda Belum Melaporkan Sesuatu</td>
                         </tr>
                        <?php
                       }
                    ?>
                    </tbody>
                  </table>
                </div>
                      </div>
                  </main>
              </div>
        </div>
      </section>

      <!-- ======= Testimoni User ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

          <header class="section-header">
            <h3>Komentar Warga</h3>
          </header>

          <div class="row justify-content-center">
            <div class="col-lg-8">

              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                      <h3>Supardi</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <p>
                        Aplikasi ini sangat bermanfaat bagi saya karena bisa melaporkan sesuatu yang berkaitan dengan desa gadungan agar dapat segera ditangani.
                      </p>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                      <h3>Friska Anjani</h3>
                      <h4>Designer</h4>
                      <p>
                        di bagian kesehatan sangat bermanfaat karena respon yang diberikan dari pihak relawan kesehatan sangat cepat dan tepat.
                      </p>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                      <h3>Angel</h3>
                      <h4>Store Owner</h4>
                      <p>
                        Terdapat juga sistem keamanan yang didapat dari desa tersebut sangat bermutu bagi keamanan warga.
                      </p>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                      <h3>Ahmad Dani</h3>
                      <h4>Freelancer</h4>
                      <p>
                      Terdapat juga sistem keamanan yang didapat dari desa tersebut sangat bermutu bagi keamanan warga.
                      </p>
                    </div>
                  </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- ======= Team Perangkat Desa ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3>Perangkat Desa</h3>
            <p>Pemerintahan Desa</p>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Budi</h4>
                    <span>Kepala Desa</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Hartati</h4>
                    <span>Sekretaris Desa</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sukadi</h4>
                    <span>Kaur Umum</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sri</h4>
                    <span>Kaur Pembangunan</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="section-bg">
      <div class="footer-top">
        <div class="container">

          <div class="row">

            <div class="col-lg-6">

              <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>B-lapor</h3>
                    <p>Aplikasi B-Lapor adalah aplikasi yang dapat memudahkan masyarakat untuk malporkan hal hal yang terdapat di desa Gadungan agar masyarakat dapat hidup lebih layak dalam situasi apapun</p>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#about">Form Lapor</a></li>
                      <li><a href="#services">Services</a></li>
                      <li><a href="#team">Team</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      Bilal Rafael Yunanta <br>
                      Kediri East Java<br>
                      Indonesia <br>
                      <strong>Phone:</strong> +62 81230412494<br>
                      <strong>Email:</strong> bilalrafaelyunanta@gmail.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://wa.me/6281230412494" class="facebook"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.instagram.com/bilalrafaelyunanta/" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>

                </div>

              </div>

            </div>

            <div class="col-lg-6">
              <h4>Location</h4>
              <div class="google-map" data-aos="zoom-in">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28369.913783484597!2d112.19930763550613!3d-7.805995334229747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785e416a5ba78b%3A0xaa49a88a30fb897c!2sGadungan%2C%20Kec.%20Puncu%2C%20Kabupaten%20Kediri%2C%20Jawa%20Timur!5e1!3m2!1sid!2sid!4v1674782714299!5m2!1sid!2sid" width="600" height="400"style="border:0;" class="rounded-xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>BLRY</strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>
</html>