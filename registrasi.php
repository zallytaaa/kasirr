<?php
include('koneksi.php');

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Check if username already exists
$query = "SELECT * FROM $role WHERE nama_$role='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username already exists. Please choose another username.');</script>";
    echo "<script>window.location.href = 'form_registrasi.php';</script>"; // Redirect back to registration form
} else {
    // Insert new user into the appropriate table
    $insert_query = "INSERT INTO $role (nama_$role, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $insert_query)) {
        echo "<script>alert('User registered successfully.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        echo "<script>window.location.href = 'form_registrasi.php';</script>"; // Redirect back to registration form
    }
}

mysqli_close($conn);
?>
