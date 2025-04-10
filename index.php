<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login B-Lapor</title>
        <link rel="shortcut icon" href="log/img/jatim.png" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image:url('log/img/masyarakat.webp'); background-size:cover; background-repeat:no-repeat;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-12">
                                    <div class="card-header"><h3 class="text-center font-bold text-4xl my-4">B-Lapor</h3></div>
                                    <div class="card-body">
                                        <form action="proses/cek_login.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nik" type="text" placeholder="Masukan nik"required minlength="15  " maxlength="16" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                <label for="inputEmail">NIK</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" required/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Centang ajahh</label>
                                                <a class="font-semibold" href="log/login_admin.php">.</a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input type="submit" value="Login" class="btn btn-primary bg-blue-700"></input>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="log/register.php">Belum Punya Akun? Silahkan Regristasi!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
