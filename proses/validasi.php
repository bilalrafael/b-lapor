<?php 
include"koneksi.php";
$id=$_GET['id'];

$ver=mysqli_query($koneksi,"update pengaduan set status='selesai' where id_pengaduan='$id'");
if($ver){
    ?>
        <script type="text/javascript">
            alert ('Data Berhasil Divalidasi');
            window.location="../admin/validasi.php"
        </script>
    <?php 
}
?>
