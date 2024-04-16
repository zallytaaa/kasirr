<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dbadm.css">
</head>
<body>
    <div class="sidebar">
        <header>
            <div class="container">
                <h1>Admin Dashboard</h1>
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
        </footer>    

    </div>

    <div class="main-content">
        <header>
            <div class="container">
                <h1>Selamat Datang di Admin Dashboard</h1>
            </div>
        </header>

        <div class="container">
            <div class="content">
                <p>Di sini Anda dapat mengelola data petugas, barang, stok barang, dan membuat laporan.</p>
                <p>Gunakan menu di sebelah kiri untuk navigasi.</p>
            </div>
        </div>
    </div>
</body>
</html>