<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir</title>
    <link rel="stylesheet" href="membership.css">
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
            <h2>Form Pendataan Membership</h2>
                <form action="simpan_membership.php" method="POST">

                    <label for="nama">Nama Pelanggan:</label>
                    <input type="text" id="nama" name="nama" required><br><br>
                    <label for="alamat">Alamat:</label>
                    <input type="alamat" name="alamat" required></input><br><br>
                    <label for="nomor_telepon">Nomor Telepon:</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" required><br><br>
                    <label for="status">Membership Status:</label>
                    <select id="status" name="status" required>
                    <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select><br><br>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
