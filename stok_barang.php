<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirim dari form
    $produk_id = $_POST['produk_id'];
    $jumlah_stok = $_POST['jumlah_stok'];

    // Query SQL untuk memperbarui stok barang
    $query = "UPDATE produk SET stok = stok + '$jumlah_stok' WHERE produk_id = '$produk_id'";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Stok barang berhasil ditambahkan.'); window.location.href = 'stok_barang.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    // Tutup koneksi database
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="stok_barangg.css">
</head>
<body>
    <div class="sidebar">
        <header>
            <div class="container">
                <h1>Dashboard Admin</h1>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="pendataan_petugas.php">Pendataan Petugas</a></li>
                <li><a href="pendataan_barang.php">Pendataan Barang</a></li>
                <li><a href="stok_barang.php">Stok Barang</a></li>
                <li><a href="generate_laporan.php">Generate Laporan</a></li>
            </ul>
        </nav>

        <footer>
            <a href="logout.php" class="logout-btn">Logout</a>
            <a href="stok_barang.php" class="back-btn">Back</a>
        </footer>    
    </div>

    <div class="main-content">
        <header>
            <div class="container">
                <h1>Stok Barang</h1>
            </div>
        </header>

        <div class="container">
            <div class="content">
                <h2>Update Stok Barang</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <div class="form-group">
                        <label for="produk_id">Pilih Produk:</label>
                        <select id="produk_id" name="produk_id">
                            <?php
                            // Ambil daftar produk dari tabel produk
                            $query = "SELECT * FROM produk";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['produk_id'] . '">' . $row['nama_produk'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_stok">Jumlah Stok Baru:</label>
                        <input type="number" id="jumlah_stok" name="jumlah_stok" required>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
