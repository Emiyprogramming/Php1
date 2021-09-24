<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body style="background-image: url(gambar.jpg);">

    <!--pesan notifikasi-->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! username dan password salah!";
        } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout ";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman ini";
        }
    }
    ?>

    <div class="container">
        <div class="row text-center">
            <h1>SMAN NEGERI 1 LOMBOK TIMUR</h1>
            <br>
            <div class="card-header bg-transparent mb-0">
                <h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-transparent mb-0">
                        <p class="login-box-msg text-center">Sign in to start your session</p>
                    </div>
                    <div class="card-body">
                        <form action="cek_login.php" method="post">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div><br>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div><br>

                            <div class="form-group">
                                <button type="submit" value="login" class="btn btn-primary btn-block btn-flat btn-sm col-md-12">Sign In</button><br><br>
                                <button type="button" class="btn btn-outline-primary btn-sm col-md-12 text-center">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>