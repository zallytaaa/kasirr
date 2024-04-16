<?php
session_start();
include 'koneksi.php';

// Memproses data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $produk_id = $_POST["produk_id"];
    $jumlah_stok = $_POST["jumlah_stok"];

    // Mendapatkan stok produk sebelumnya
    $query_produk = "SELECT stok FROM produk WHERE produk_id = $produk_id";
    $result_produk = mysqli_query($conn, $query_produk);
    $row_produk = mysqli_fetch_assoc($result_produk);
    $stok_sebelumnya = $row_produk['stok'];

    // Menambahkan stok baru dengan stok sebelumnya
    $stok_baru = $stok_sebelumnya + $jumlah_stok;

    // Menyiapkan query SQL untuk memperbarui stok produk
    $sql = "UPDATE produk SET stok = '$stok_baru' WHERE produk_id = $produk_id";

    // Menjalankan query dan memeriksa apakah berhasil
    if ($conn->query($sql) === TRUE) {
        // Pesan alert untuk memberi tahu bahwa stok berhasil diperbarui
        echo "<script>alert('Stok barang berhasil diperbarui'); window.location.href='stok_barang.php';</script>";
    } else {
        // Pesan alert untuk memberi tahu jika terjadi kesalahan
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "'); window.location.href='stok_barang.php';</script>";
    }
}

// Menutup koneksi ke database
$conn->close();
?>
