<?php
include"koneksi.php";

$nama=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];

$reg=mysqli_query($koneksi,"insert into petugas(id_petugas,nama_petugas,username,password,telp,level) values('','$nama','$username','$password','$telp','$level')");
if ($reg)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan, Bisa diGunakan Untuk Login');
        window.location="../admin/index.php"
    </script>
<?php    
}
?>