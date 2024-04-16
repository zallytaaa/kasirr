<?php
// memulai sesi
session_start();

// menghapus semua data sesi
session_unset();

// menghancurkan sesi
session_destroy();

// kembali ke halaman login jika sdh selesai logout
header("Location: login.php");
exit; // Pastikan tidak ada output lain setelah header 
?>