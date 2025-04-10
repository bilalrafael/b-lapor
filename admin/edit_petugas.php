<?php
session_start();
  if(!isset($_SESSION['user'])){
    header("location:../log/login_admin.php");
  }
?>
<?php
  include "../template/header.php"
?>

<?php
include "../proses/koneksi.php";
$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "select * from petugas where id_petugas='$id'");
// $hasil = mysqli_fetch_array($tampil);
while($hasil=mysqli_fetch_array($tampil)) {
?>

<div id="layoutSidenav_content">  
  <form action="../proses/edit_petugas.php" method="POST">
    <div class="card-body">
      <div class="fs-4 fw-bolder mb-3">Form Edit Petugas</div>
      <div class="form-group cols-sm-6 my-2">
        <a href="manajemen.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
          </span>
          <span class="text">Kembali</span>
        </a>
      </div>
      <div class="form-group ">
        <label for="exampleInputEmail1" class="fs-5">ID Petugas</label>
        <input type="text" class="form-control" placeholder="Masukan Nama Menu" readonly  name="id_petugas" value="<?php echo $hasil['id_petugas']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="fs-5">Nama Petugas</label>
        <input type="text" class="form-control" placeholder="Masukan Nama Menu" name="nama_petugas" value="<?php echo $hasil['nama_petugas']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="fs-5">Username</label>
        <input type="text" class="form-control" placeholder="Harga"  name="username" value="<?php echo $hasil['username']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="fs-5">Password</label>
        <input type="text" class="form-control" name="password" value="<?php echo $hasil['password']?>">
      </div>
      <div class="form-group">
        <label class="fs-5">Telepon</label>
        <input type="text" value="<?php echo $hasil['telp']?>" name="telp" class="rounded-3 form-control" width="600px"/>
      </div>
      <div class="form-group">
        <label class="fs-5">Jabatan</label>
      </div>
      <div class="form-group row">
       <div class="col-sm-6 mb-sm-0">
        <div class="form-check">
         <input class="form-check-input" type="radio" name="level" id="level"
          value="admin"<?php if($hasil['level']=='admin') echo 'checked'?>>
         <label class="form-check-label" for="admin">
           Admin
         </label>
       </div>
     </div>
     <div class="col-sm-6">
       <div class="form-check">
         <input class="form-check-input" type="radio" name="level" id="level" 
         value="petugas"<?php if($hasil['level']=='petugas') echo 'checked'?>>
         <label class="form-check-label" for="petugas">
           Petugas
         </label>
       </div>
     </div>
   </div>
                   
      <div class="px-2">
        <button type="submit" name="" class="bg-yellow-500 mt-4 btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text-white">Submit</span>
        </button>
     </div>
    </div>
  </form>  
</div>
<?php
}
?>
<?php
 include "../template/footer.php"  
?>