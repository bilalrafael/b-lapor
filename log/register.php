<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register B-Lapor</title>
        <link rel="shortcut icon" href="img/jatim.png" type="image/x-icon">
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image:url('img/regristasi.avif'); background-size:cover; background-repeat:no-repeat;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registrasi Akun</h3></div>
                                    <div class="card-body">
                                        <form  action="../proses/simpan_masyarakat.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nik" type="text" placeholder="Masukan nik"required minlength="15" maxlength="16" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                <label>Nik</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nama" type="text" placeholder="Masukan Nama" required/>
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
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block"></input></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../index.php">Sudah Punya Akun? Silahkan login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
