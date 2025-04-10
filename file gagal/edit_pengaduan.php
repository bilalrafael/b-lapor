<?php
include "koneksi.php";
$nik=$_POST['nik'];
$laporan=$_POST['isi_laporan'];
$id=$_POST['id_pengaduan'];

	
	$foto=$_FILES['foto']['name'];
	$x = explode(".",$foto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];	
    $ekstensi_diperbolehkan	= array("jpg", "png", "gif");
	//if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			
			move_uploaded_file($file_tmp, '../img_laporan/'.$foto);
			if(!empty($foto)) {
                $query=mysqli_query($koneksi,"update pengaduan set tgl_pengaduan=NOW(),isi_laporan='$laporan',foto='$foto' where id_pengaduan='$id'");
            } else {
                $query=mysqli_query($koneksi,"update pengaduan set tgl_pengaduan=NOW(),isi_laporan='$laporan' where id_pengaduan='$id'");
            } ?>