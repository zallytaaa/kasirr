<?php
// Include file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirim dari form
    $tanggal_pembelian = $_POST['tanggal_pembelian'];
    $produk_id = $_POST['produk_id'];
    $jumlah_produk = $_POST['jumlah_produk'];
    $kasir_id = $_POST['kasir_id'];

    // Query SQL untuk menyimpan data pembelian ke dalam tabel penjualan
    $query_penjualan = "INSERT INTO penjualan (tanggal_penjualan, kasir_id) 
                        VALUES ('$tanggal_pembelian', '$kasir_id')";
    mysqli_query($conn, $query_penjualan);

    // Dapatkan ID penjualan terbaru
    $penjualan_id = mysqli_insert_id($conn);

    // Hitung subtotal berdasarkan harga produk dan jumlah produk
    $query_produk = "SELECT produk.nama_produk, produk.harga_reguler FROM produk WHERE produk_id = $produk_id";
    $result_produk = mysqli_query($conn, $query_produk);
    $row_produk = mysqli_fetch_assoc($result_produk);
    $nama_produk = $row_produk['nama_produk'];
    $harga_produk = $row_produk['harga_reguler'];
    $subtotal = $harga_produk * $jumlah_produk;

    // Query SQL untuk menyimpan data detail pembelian ke dalam tabel detail_penjualan
    $query_detail_penjualan = "INSERT INTO detail_penjualan (penjualan_id, produk_id, jumlah_produk, subtotal)
                               VALUES ('$penjualan_id', '$produk_id', '$jumlah_produk', '$subtotal')";
    mysqli_query($conn, $query_detail_penjualan);

    // Tutup koneksi database
    mysqli_close($conn);

    // Redirect ke halaman output
    header("Location: output_pembelian.php?penjualan_id=$penjualan_id&tanggal_pembelian=$tanggal_pembelian&nama_produk=$nama_produk&jumlah_produk=$jumlah_produk&harga_total=$subtotal");
    exit();
}
?>
