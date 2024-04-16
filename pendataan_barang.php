<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="pendataann_barang.css">
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
                <h1>Pendataan Barang</h1>
            </div>
        </header>

        <div class="container">
            <div class="content">
                <h2>Pendataan Barang</h2>
                    <form action="proses_pendataan_barang.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Barang:</label>
                        <input type="text" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Reguler:</label>
                        <input type="text" id="harga" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="harga_member">Harga Member:</label>
                        <input type="text" id="harga_member" name="harga_member">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok:</label>
                        <input type="number" id="stok" name="stok">
                    </div>
                

                    <input type="submit" value="Submit">
                    </form>
            </div>
        </div>
    </div>
</body>
</html>