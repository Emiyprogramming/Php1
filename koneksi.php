<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_sekolah") or die("connect failed.!");

//cek koneksi
if (mysqli_connect_errno()) {
    echo "koneksi database gagal : " . mysqli_connect_errno();
}
?>