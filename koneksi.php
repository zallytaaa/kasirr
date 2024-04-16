<?php
// Langkah 1: Buat koneksi ke database
$conn = mysqli_connect("localhost","root","","kasirr");

// Periksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>