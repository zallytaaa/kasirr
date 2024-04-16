<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="pendataann_petugas.css">
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
                <h1>Pendataan Petugas</h1>
            </div>
        </header>

        <div class="container">
            <div class="content">
                <h2>Pendataan Petugas</h2>
                    <form action="proses_pendataan_petugas.php" method="POST">
                        <input type="hidden" name="kasir_id" value="AUTO_INCREMENT"> <!-- ID akan di-generate secara otomatis oleh database -->
                            <div class="form-group">
                                <label for="nama">Nama Kasir:</label>
                                <input type="text" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password">
                            </div>
                        <input type="submit" value="Submit">
                    </form>
            </div>
        </div>
    </div>
</body>
</html>
