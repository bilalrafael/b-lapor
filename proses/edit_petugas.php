<?php 
 
include 'koneksi.php';
$id = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];
 
$query=mysqli_query($koneksi,"update petugas set
nama_petugas='$nama_petugas',
username='$username',
password='$password',
telp='$telp',
level='$level'
where id_petugas='$id'");
if ($query)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Di Edit');
        window.location="../admin/manajemen.php"
    </script>
<?php    
}
?>