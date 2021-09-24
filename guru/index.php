<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guru</title>
</head>

<body>
    <h2> selamat datang guru</h2>

    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }

    ?>

    <h4>selamat datang <?php echo $_SESSION['username']; ?>!anda telah login</h4>

    <a href="logout.php">logout</a>
</body>

</html>