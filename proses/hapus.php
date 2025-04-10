<?php
    include "koneksi.php";
    $id=$_GET['id'];

    $delete=mysqli_query($koneksi,"delete from pengaduan where id_pengaduan='$id'");
    if ($delete)
    {
        ?>
        <script type="text/javascript">
            alert ('Data Berhasil Dihapus');
            window.location="../page/masyarakat.php#why-us"
        </script>
    <?php    
    }
?>