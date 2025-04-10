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
        <div class="">
          <!-- <img src="../log/img/jatim.jpg" class="w-32"> -->
          <div class="">
            <div class="text-xl text-center font-bold" align="center">PEMERINTAH KABUPATEN KEDIRI</div>
            <div class="text-xl text-center font-bold" align="center">KECAMATAN PUNCU</div>
            <div class="text-2xl text-center font-bold" align="center">KANTOR KEPALA DESA GADUNGAN</div>
            <div class="text-md text-center font-bold" align="center">Jl.Diponegoro Desa Gadungan Puncu </div>
          </div>
        </div>
      </div>
        <br>
        <br>
        <h5 class="fw-bold text-secondary " align="center">Laporan Pengaduan</h5>
        <br>
        <table id="example1" class="table table-bordered table-striped" style="text-align:center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Isi Laporan</th>
                    <th>Tanggapan</th>
                    <th>Status</th>
                    <!-- <th>Opsi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "../proses/koneksi.php";
                    $no = 1;
                    // $tgl=date("m");
                    $tampil=mysqli_query($koneksi,"select m.nik,m.nama,p.tgl_pengaduan,p.status,t.tanggapan,p.isi_laporan,t.tgl_tanggapan from pengaduan p left join masyarakat m on p.nik=m.nik left join tanggapan t on p.id_pengaduan=t.id_pengaduan");
                    while($data=mysqli_fetch_array($tampil)) {                  
                  ?>
                    <tr>
                      <td><?php echo $no++?></td>
                      <td><?php echo $data['nik'] ?></td>
                      <td><?php echo $data['nama'] ?></td>
                      <td><?php echo $data['tgl_pengaduan'] ?></td>
                      <td><?php echo $data['isi_laporan'] ?></td>
                      <td>
                            <?php echo $data['tanggapan'];
                            if(empty($data['tanggapan'])){
                                echo "Laporan Belum diTanggapi";
                                }
                            ?>
                      </td>  
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