<?php

session_start();

// Menghapus Semua Sesi
session_destroy();

//Mengarahkan halaman dan memberikan pesan logout
header("location:index.php?pesan=logout");
?>