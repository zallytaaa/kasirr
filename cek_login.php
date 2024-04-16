<?php
session_start();

// Include database connection file
include('koneksi.php');

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the user is an admin
$query = "SELECT * FROM admin WHERE nama_admin='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'admin';
    header('Location: dbadm.php');
    exit;
}

// Check if the user is a cashier
$query = "SELECT * FROM kasir WHERE nama_kasir='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'kasir';
    header('Location: dbkasir.php');
    exit;
}

// If login fails, redirect back to login page
header('Location: login.php?login_failed=true');
exit;
?>
