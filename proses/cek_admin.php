<?php
    include "koneksi.php";

    $user=$_POST['username'];
    $pass=$_POST['password'];

    $loga=mysqli_query($koneksi,"select * from petugas where username='$user' and password='$pass' ");
    $ceki=mysqli_num_rows($loga);

    if ($ceki>0)
    {
        $data=mysqli_fetch_array($loga);
        if ($data['level']=="admin") {
            session_start();
            $_SESSION['user']=$user;
            $_SESSION['nama']=$data['nama_petugas'];
            $_SESSION['level']=$data['level'];
            $_SESSION['id']=$data['id_petugas'];
            $_SESSION['folder']='admin';
            header('location:../admin/index.php');
        }else if ($data['level']=="petugas") {
            session_start();
            $_SESSION['user']=$user;
            $_SESSION['nama']=$data['nama_petugas'];
            $_SESSION['level']=$data['level'];
            $_SESSION['id_petugas']=$data['id_petugas'];
            $_SESSION['folder']='petugas';
            header('location:../petugas/index.php'); 
            }
    } else {     
    ?>
    <script type="text/javascript">
        alert ('Username Atau Pasaword Tidak Ditemukan');
        window.location="../log/login_admin.php"
    </script>
<?php    
}
?>