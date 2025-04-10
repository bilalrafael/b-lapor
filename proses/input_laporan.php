<?php
include "koneksi.php";
$nik=$_POST['nik'];
$laporan=$_POST['isi_laporan'];

	$ekstensi_diperbolehkan	= array("jpg", "png", "gif");
	$foto = $_FILES['foto']['name'];
	$x = explode(".",$foto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];	

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 6044070){			
			move_uploaded_file($file_tmp, '../img_laporan/'.$foto);
			$query=mysqli_query($koneksi,"insert into pengaduan(id_pengaduan,tgl_pengaduan,nik,isi_laporan,foto,status)values('',NOW(),'$nik','$laporan','$foto','0')");
			if ($query){
				?>
				<script type="text/javascript">
					alert ('Data Berhasil Dilaporkan Silahkan Tunggu Tanggapan Petugas');
					window.location="../page/masyarakat.php#why-us"
				</script>
    			<?php 
			}else{
				header("location:pesan=gagal");
			}
		}else{
			header("location:pesan=ukuranfile");
		}
	}else{
		header("location:pesan=ekstensifile");
	}
?>
