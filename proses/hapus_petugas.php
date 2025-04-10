<?php
    include "koneksi.php";
    $id=$_GET['id'];

    $delete=mysqli_query($koneksi,"delete from petugas where id_petugas='$id'");
    if ($delete)
    {
        ?>
        <script type="text/javascript">
            alert ('Data Berhasil Dihapus');
            window.location="../admin/manajemen.php"
        </script>
    <?php    
    }
?>