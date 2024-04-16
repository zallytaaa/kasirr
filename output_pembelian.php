<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pembelian</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #333;
            margin: 0;
            padding: 8;
            box-sizing: border-box;
        }
        .container {
            max-width: 500px;
            margin: 25px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 10px 15px rgba(0, 0, 1, 0.5);
        }
        h1 {
            text-align: center;
        }
        .detail {
            margin-bottom: 20px;
        }
        .detail label {
            font-weight: bold;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-next {
            background-color: #555;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Pembelian</h1>
        <?php
        include 'koneksi.php';

        $query = "SELECT dp.penjualan_id, p.kasir_id, p.tanggal_penjualan, dp.produk_id, dp.jumlah_produk, dp.subtotal, pr.nama_produk, pr.harga_reguler
                  FROM detail_penjualan dp
                  INNER JOIN penjualan p ON dp.penjualan_id = p.penjualan_id
                  INNER JOIN produk pr ON dp.produk_id = pr.produk_id
                  ORDER BY p.tanggal_penjualan DESC, dp.penjualan_id DESC
                  LIMIT 1";

        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "<div class='container'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    // Tampilkan data pembelian
                    echo "<div class='detail'>";
                    echo "<label for='kasir'>Kasir ID:</label><br>";
                    echo $row['kasir_id']; 
                    echo "</div>";

                    echo "<div class='detail'>";
                    echo "<label for='tanggal_penjualan'>Tanggal Penjualan:</label><br>";
                    echo $row['tanggal_penjualan'];
                    echo "</div>";

                    echo "<div class='detail'>";
                    echo "<label for='produk'>Nama Produk:</label><br>";
                    echo $row['nama_produk']; 
                    echo "</div>";

                    echo "<div class='detail'>";
                    echo "<label for='harga'>Harga per Produk:</label><br>";
                    echo $row['harga_reguler']; 
                    echo "</div>";

                    echo "<div class='detail'>";
                    echo "<label for='jumlah_produk'>Jumlah Produk:</label><br>";
                    echo $row['jumlah_produk'];
                    echo "</div>";

                    echo "<div class='detail'>";
                    echo "<label for='subtotal'>Subtotal:</label><br>";
                    echo $row['subtotal']; 
                    echo "</div>";
                }
                echo "</div>";

                // Tombol Next dan Kembali ke Form Pembelian
                echo "<div class='btn-container'>";
                echo "<button class='btn btn-next' onclick='window.location.href=\"pembelian.php\"'>Next</button>";
                echo "</div>";
            } else {
                echo "<div class='container'>";
                echo "<h1>Hasil Pembelian</h1>";
                echo "<p>Tidak ada data pembelian.</p>";
                echo "</div>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
