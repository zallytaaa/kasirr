<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir</title>
    <link rel="stylesheet" href="pembeliann.css">
</head>
<body>
    <div class="sidebar">
        <header>
            <div class="container">
                <h1>Dashboard Kasir</h1>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="pendataan_membership.php">Pendataan Membership</a></li>
                <li><a href="pembelian.php">Pembelian</a></li>
                <li><a href="stok_barang2.php">Stok Barang</a></li>
            </ul>
        </nav>

        <footer>
            <a href="logout.php" class="logout-btn">Logout</a>
            <a href="dbkasir.php" class="back-btn">Back</a>
        </footer>    
    </div>

    <div class="main-content">
        <header>
            <div class="container">
                <h1>Pembelian</h1>
            </div>
        </header>

        <div class="container">
            <div class="content">
                <h2>Form Pembelian</h2>
                <form action="proses_pembelian.php" method="POST">
             
                    <label for="tanggal_pembelian">Tanggal Pembelian:</label>
                    <input type="date" id="tanggal_pembelian" name="tanggal_pembelian" required><br><br>
                    
                    <label for="produk_id">Pilih Produk:</label>
                    <select id="produk_id" name="produk_id">
                        <?php
                        // Include file koneksi ke database
                        include 'koneksi.php';

                        // Query untuk mengambil data produk dari tabel produk
                        $query = "SELECT * FROM produk";
                        $result = mysqli_query($conn, $query);

                        // Periksa apakah ada hasil yang dikembalikan dari query
                        if (mysqli_num_rows($result) > 0) {
                            // Tampilkan opsi produk dalam dropdown
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['produk_id'] . '">' . $row['nama_produk'] . '</option>';
                            }
                        } else {
                            // Jika tidak ada produk yang tersedia, tampilkan pesan
                            echo '<option value="">Tidak ada produk yang tersedia</option>';
                        }

                        // Tutup koneksi database
                        mysqli_close($conn);
                        ?>
                    </select>
                    
                    <label for="jumlah_produk">Jumlah Produk:</label>
                    <input type="number" id="jumlah_produk" name="jumlah_produk" required><br><br>

                    <label for="kasir_id">Kasir:</label>
                    <select id="kasir_id" name="kasir_id">
                        <?php
                        // Include file koneksi ke database
                        include 'koneksi.php';

                        // Query untuk mengambil data produk dari tabel produk
                        $query = "SELECT * FROM kasir";
                        $result = mysqli_query($conn, $query);

                        // Periksa apakah ada hasil yang dikembalikan dari query
                        if (mysqli_num_rows($result) > 0) {
                            // Tampilkan opsi produk dalam dropdown
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['kasir_id'] . '">' . $row['nama_kasir'] . '</option>';
                            }
                        } else {
                            // Jika tidak ada produk yang tersedia, tampilkan pesan
                            echo '<option value="">Tidak ada produk yang tersedia</option>';
                        }

                        // Tutup koneksi database
                        mysqli_close($conn);
                        ?>
                    </select>
                    
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
