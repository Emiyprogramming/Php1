<?php
//session star
session_unset();

//menhapus semua session
session_destroy();

//mengalihkan halaman sambil mengirim logout
header('location:../index.php?pesan=logout');
?>