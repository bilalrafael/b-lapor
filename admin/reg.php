<?php
session_start();
  if(!isset($_SESSION['user'])){
    header("location:../log/login_admin.php");
  }
?>
<?php include "../template/header.php" ?>
    <div id="layoutSidenav_content">  
        <form action="../proses/reg_admin.php" method="POST">
            <div class="card-body">
            <div class="fs-4 fw-bolder mb-3">Form Regristasi</div>
            <div class="form-group cols-sm-6 my-2">
                <a href="../admin/index.php" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
                </a>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="nama_petugas" type="text" placeholder="Masukan Nama" required/>
                <label>Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="username" type="text" placeholder="Buat userneme" required/>
                <label>Username</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="password" type="password" placeholder="Buat Password" required/>
                <label>Password</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="telp" type="number" placeholder="Nomor Telepon" required/>
                <label>No Telp</label>
            </div>
            <div class="form-floating mb-3">
                <select id="" name="level" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
                <label>Jabatan</label>
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid"><input type="submit" class="bg-blue-500 btn btn-primary btn-block"></input></div>
            </div>
            </div>
        </form>  
    </div>