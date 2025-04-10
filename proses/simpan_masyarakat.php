<?php
include"koneksi.php";

$nama=$_POST['nama'];
$nik=$_POST['nik'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$reg=mysqli_query($koneksi,"insert into masyarakat(nama,nik,username,password,telp) values('$nama','$nik','$username','$password','$telp')");
if ($reg)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
        window.location="../index.php"
    </script>
<?php    
}
?>