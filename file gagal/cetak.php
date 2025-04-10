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
        <title>B-Lapor</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    <div class="card-body">
      <div class="mt-4">
        <div class="flex flex-wrap">
          <img src="../log/img/jatim.jpg" class="w-32">
          <div class="ml-6">
            <div class="text-xl text-center font-bold">PEMERINTAH KABUPATEN KEDIRI</div>
            <div class="text-xl text-center font-bold">KECAMATAN PUNCU</div>
            <div class="text-2xl text-center font-bold">KANTOR KEPALA DESA GADUNGAN</div>
            <div class="text-md text-center font-bold">Jl.Diponegoro Desa Gadungan Puncu </div>
          </div>
        </div>
      </div>
        <br>
        <br>
        <h5 class="fw-bold text-secondary " align="center">Laporan Bulanan</h5>
        <br>
        <table id="example1" class="table table-bordered table-striped" style="text-align:center">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <!-- <th>Opsi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "../proses/koneksi.php";
                    $no = 1;
                    $tgl=date("Y-m-d");
                    $tampil=mysqli_query($koneksi,"select * from pengaduan where tgl_pengaduan='$tgl'");
                    while($data=mysqli_fetch_array($tampil)) {                  
                  ?>
                    <tr>
                      <td><?php echo $no++?></td>
                      <td><?php echo $data['nik'] ?></td>
                      <td><?php echo $data['tgl_pengaduan'] ?></td>
                      <td><?php echo $data['isi_laporan'] ?></td>
                      <td><?php echo $data['foto'] ?></td>
                      <td><?php echo $data['status'] ?></td>
                      <!-- <td class="flex flex-wrap">
                        <a href="form_edit.php?id=<?php echo $data['id_pengaduan'];?>" class="border-2 bg-blue-500 font-semibold rounded-md shadow-md mr-1 px-3 w-24 py-1 hover:bg-slate-200">Edit</a>
                        <a href="hapus.php?id=<?php echo $data['id_pengaduan'];?>" class="border-2 bg-red-500 font-semibold rounded-md shadow-md px-2 w-24 py-1 hover:bg-slate-200">Delete</a>
                      </td> -->
                      <!-- <td> -->
                        <!-- <a href="detail.php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-success btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-info"></i>
                          </span>
                          <span class="text">Lihat Detail</span>
                        </a> -->
                        <!-- <a href="tanggapann..php?id=<?php echo $data['id_pengaduan'];?>" class="my-1 btn btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-eye"></i>
                          </span>
                          <span class="text">Beri Tanggapan</span>
                        </a> -->
                      <!-- </td> -->
                    </tr>
                  <?php
                   }
                  ?>
                  </tbody>
                </table>
                <br>
                <div class="absolute  right-5">
                    <h6 class="text-lg font-semibold text-center">Gadungan, <?php echo date('d/m/Y') ?></h6>
                    <h6 class="text-lg font-semibold text-center">Petugas</h6>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h6 class="text-lg font-semibold text-center"><?php echo $_SESSION['nama'] ?></h6>
                </div>
              </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        </body>
</html>