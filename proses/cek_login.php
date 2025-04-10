<?php
    include "koneksi.php";

    $nik=$_POST['nik'];
    $pass=$_POST['password'];

    $log=mysqli_query($koneksi,"select * from masyarakat where nik='$nik' and password='$pass' ");
    $cek=mysqli_num_rows($log);

    if ($cek>0)
    {
        $data=mysqli_fetch_array($log);
        session_start();
        $_SESSION['nama']=$data['nama'];
        $_SESSION['nik']=$data['nik'];
        header('location:../page/masyarakat.php');
    }else{     
    ?>
    <script type="text/javascript">
        alert ('Username Atau Password Tidak Ditemukan');
        window.location="../index.php"
    </script>
<?php    
}
?>