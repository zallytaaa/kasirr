<!DOCTYPE html>

<head>
    <title>REGISTRASI</title>
    <link rel="stylesheet" href="form_registrasi.css">
</head>

<body>
    <div class="container">
        <div class="login">
        <form action="registrasi.php" method="POST">
                <h1>REGISTRASI</h1>
                <hr>
                <p>Halo, silahkan lakukan Registrasi sebagai admin</p>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <label for="role" class="form-label">Role:</label>
                        <select class="form-select" id="role" name="role">
                            <option value="admin">Admin</option>
                            
                        </select>
                <p>
                    <button type="submit">Registrasi</button>
                    <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
                </p>
            </form>
        </div>
    <div class="right">
            <img src="logologin.jpg"> 
        </div>
    </div>
</body>

</html>