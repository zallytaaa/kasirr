<?php
session_start();
include 'koneksi.php';

// Memproses data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nama_barang = $_POST["nama"];
    $harga_reguler = $_POST["harga"];
    $harga_member = $_POST["harga_member"];
    $stok = $_POST["stok"];

    // Menyiapkan query SQL untuk memasukkan data ke dalam tabel produk
    $sql = "INSERT INTO produk (nama_produk, harga_reguler, harga_member, stok) VALUES ('$nama_barang', '$harga_reguler', '$harga_member', '$stok')";

    // Menjalankan query dan memeriksa apakah berhasil
    if ($conn->query($sql) === TRUE) {
        // Menggunakan JavaScript untuk menampilkan pesan alert
        echo "<script>alert('Data barang berhasil ditambahkan'); window.location.href='pendataan_barang.php';</script>";
    } else {
        // Jika terjadi kesalahan, kembali ke halaman pendataan_produk.php dengan pesan error
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "'); window.location.href='pendataan_barang.php';</script>";
    }
}

// Menutup koneksi ke database
$conn->close();
?>
