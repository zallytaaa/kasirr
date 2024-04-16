<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="generate_laporan.css">
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
            <a href="dbadm.php" class="back-btn">Back</a>
        </footer>    
    </div>

    <div class="main-content">
        <header>
            <div class="container">
                <h1>Laporan</h1>
            </div>
        </header>

        <div class="container">
            <div class="content">
                <h2>Laporan Penjualan Harian</h2>
                <!-- Masukkan kode PHP untuk menampilkan data penjualan di sini -->
                <div class="laporan">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Penjualan ID</th>
                                <th>Kasir ID</th>
                                <th>Tanggal Penjualan</th>
                                <th>Produk ID</th>
                                <th>Jumlah Produk</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Mengambil data detail penjualan dari tabel detail_penjualan
                            include('koneksi.php');
                            $query = "SELECT dp.penjualan_id, p.kasir_id, p.tanggal_penjualan, dp.produk_id, dp.jumlah_produk, dp.subtotal
                                      FROM detail_penjualan dp
                                      INNER JOIN penjualan p ON dp.penjualan_id = p.penjualan_id"; // Memperbaiki penulisan kolom penjualan_id
                            $result = mysqli_query($conn, $query);

                            // Menampilkan data detail penjualan dalam tabel
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['penjualan_id'] . "</td>"; // Memperbaiki penulisan nama kolom
                                echo "<td>" . $row['kasir_id'] . "</td>";
                                echo "<td>" . $row['tanggal_penjualan'] . "</td>";
                                echo "<td>" . $row['produk_id'] . "</td>";
                                echo "<td>" . $row['jumlah_produk'] . "</td>";
                                echo "<td>" . $row['subtotal'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
