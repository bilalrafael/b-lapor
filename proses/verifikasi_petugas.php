<?php 
include"koneksi.php";
$id=$_GET['id'];

$ver=mysqli_query($koneksi,"update pengaduan set status='proses' where id_pengaduan='$id'");
if($ver){
    ?>
        <script type="text/javascript">
            alert ('Data Berhasil Diverivikasi');
            window.location="../admin/verifikasi.php"
        </script>
    <?php 
}
?>
