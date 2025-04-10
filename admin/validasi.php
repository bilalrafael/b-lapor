<?php
session_start();
  if(!isset($_SESSION['user'])){
    header("location:../log/login_admin.php");
  }
?>

<?php
    include "../template/header.php"
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="mt-4 mb-4 fs-2 fw-bolder">Laporan Masyarakat yang perlu di Validasi
                            <!-- <button type="button" class="btn btn-success my-4 shadow-lg rounded-pill ml-4">Success</button> -->
                        </div>
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
                        $tampil=mysqli_query($koneksi,"select * from pengaduan left join tanggapan on pengaduan.id_pengaduan=tanggapan.id_pengaduan where status='proses' order by tgl_pengaduan desc");
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
                            <a href="../proses/validasi.php?id=<?php echo $data['0'];?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin untuk Validasi ?')">
                                <span class="icon text-white-50">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="text">Validasi</span>
                            </a>
                        </td>
                        </tr>
                    <?php
                    } } else {
                        ?>
                        <tr>
                            <td colspan="7">Belum Ada Laporan Yang DiVerifikasi</td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                    </table>
                </div>
            </div>
                    </div>
                </main>
                
            </div>
        </div>
    </body>
</html>

<?php
    include "../template/footer.php"  
?>

