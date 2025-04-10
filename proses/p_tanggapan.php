<?php
include "koneksi.php";

$id_pengaduan=$_POST['id_pengaduan'];
$tgl_tanggapan=$_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$status='selesai';

$tang=mysqli_query($koneksi,"insert into tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values('$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')");
if ($tang) {
?>

    <script type="text/javascript">
        alert ('Laporan sudah di Tanggapi');
        window.location="../admin/data_Pengaduan.php"
    </script>

<?php    
}
?>