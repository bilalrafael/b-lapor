<?php 
include"../koneksi.php";
$id=$_GET['id'];

$ver=mysqli_query($koneksi,"update pengaduan set status='selesai' where id_pengaduan='$id'");
if($ver){
    header('location:../../petugas/validasi.php');
}
?>
