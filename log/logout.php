<script type="text/javascript">
        alert ('Anda yakin untuk logot?');
</script>
<?php
session_start();
unset($_SESSION['nama']);
session_destroy();
header('location:../index.php')
?>
