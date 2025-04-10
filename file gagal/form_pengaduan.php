<?php
    include "../template/header.php"
?>
 <div class="content-wrapper w-full mt-32">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <div class="text-2xl text-center font-bold">Form Input Menu</div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="p_input_menu.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIK</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan NIK" name="nik">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi Laporan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Laporan" name="laporan">
                  </div>
                  <div class="">
                    <label for="exampleInputPassword1">Kategori</label>
                    <select id="" name="kategori" class="form-control">
                        <option disabled selected>Pilih Kategori</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="snack">Snack</option>
                    </select>
                  </div>
                  <div class="form-check pt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Centang ajahh</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="flex flex-wrap ml-4 my-2">
                  <div class="px-2">
                    <button type="submit" name="simpan" class="bg-blue-600 hover:shadow-xl font-semibold px-3 py-2 rounded-md text-white hover:bg-blue-800">Submit</button>
                  </div>
                  <div class="px-2">
                    <button type="reset" class="bg-blue-600 hover:shadow-xl font-semibold px-4 py-2 rounded-md text-white hover:bg-blue-800">Reset</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card --> 
            </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<?php
 include "../template/footer.php"  
?>