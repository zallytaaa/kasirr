<!DOCTYPE html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="loginn.css">
</head>

<body>
    <div class="container">
        <div class="login">
        <form action="cek_login.php" method="POST">
                <h1>Login</h1>
                <hr>
                <p>Halo, selamat datang di aplikasi Kasir</p>

                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                <p>
                    <button type="submit">Login</button>
                    <p>Belum punya akun? <a href="form_registrasi.php">Registrasi disini</a></p>
                </p>
            </form>
        </div>
    <div class="right">
            <img src="logologin.jpg"> 
        </div>
    </div>
</body>

</html>