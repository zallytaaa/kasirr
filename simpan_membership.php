<?php
// Include file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirim dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $status = $_POST['status']; // Perubahan: Mengambil nilai status sebagai integer (1 atau 0)

    // Query SQL untuk mengecek apakah data pelanggan sudah ada di database
    $check_query = "SELECT * FROM pelanggan WHERE nama_pelanggan = '$nama' AND alamat = '$alamat' AND nomor_telepon = '$nomor_telepon'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Jika data pelanggan sudah ada di database, tampilkan alert dan redirect kembali ke halaman sebelumnya
        echo "<script>alert('Pelanggan sudah terdaftar sebagai membership');</script>";
        echo "<script>window.history.back();</script>";
        exit();
    } else {
        // Query SQL untuk menyimpan data keanggotaan ke dalam tabel pelanggan
        $query = "INSERT INTO pelanggan (nama_pelanggan, alamat, nomor_telepon, membership_status) 
                  VALUES ('$nama', '$alamat', '$nomor_telepon', '$status')";
        $result = mysqli_query($conn, $query);

        // Tutup koneksi database
        mysqli_close($conn);

        if ($result) {
            // Jika penyimpanan berhasil, tampilkan alert dan redirect ke halaman pendataan_membership.php
            echo "<script>alert('Data Membership berhasil disimpan');</script>";
            echo "<script>window.location.href='pendataan_membership.php';</script>";
            exit();
        } else {
            // Jika penyimpanan gagal, tampilkan alert dan redirect kembali ke halaman sebelumnya
            echo "<script>alert('Gagal menyimpan data Membership');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        }
    }
}
?>
