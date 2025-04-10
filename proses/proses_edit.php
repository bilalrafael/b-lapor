<?php
    include "koneksi.php";

    $id_pengaduan = $_POST['id_pengaduan'];
    $tanggal_pengaduan = $_POST['tanggal_pengaduan'];
    $nik = $_POST['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $foto = $_POST['foto'];

    $query=mysqli_query($koneksi,"update pengaduan set isi_laporan='$isi_laporan',foto='$foto' where id_pengaduan='$id_pengaduan'"); 

    header("location:../page/lihat_laporan.php")
?>