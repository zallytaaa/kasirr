<?php
session_start();
include 'koneksi.php';

// Periksa apakah ada data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirim dari form
    $nama = $_POST["nama"];
    $password = $_POST["password"];
    
    // Lakukan pengecekan apakah ada nama yang sama dengan password yang sama
    $check_query = "SELECT * FROM kasir WHERE nama_kasir = '$nama' AND password = '$password'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Nama dan password tersebut sudah digunakan sebelumnya. Harap gunakan kombinasi yang berbeda.'); window.location.href = 'pendataan_petugas.php';</script>";
        exit();
    }
    
    // Lakukan penyisipan data ke dalam database
    $query = "INSERT INTO kasir (nama_kasir, password) VALUES ('$nama', '$password')";
    
    // Jalankan query
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil disimpan.'); window.location.href = 'pendataan_petugas.php';</script>";
        // Redirect ke halaman sukses jika penyisipan berhasil
        exit();
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        echo "<script>window.location.href = 'pendataan_petugas.php';</script>";
        // Tampilkan pesan kesalahan jika terjadi kesalahan dalam penyisipan data
    }
}

// Tutup koneksi ke database (jika diperlukan)
mysqli_close($conn);
?>
