<?php
session_start();

require 'config.php';
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Mencegah SQL Injection
$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM data_pengguna WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Menambahkan pepper ke password yang dimasukkan
    $peppered_password = $password . PEPPER;
    
    // Verifikasi password dengan password_hash
    if (password_verify($peppered_password, $row['password'])) {
        // Menyimpan informasi pengguna ke session
        $_SESSION['id'] = $row['id'];
        $_SESSION['nama'] = $row['nama'];
        header("Location: dashboard.php"); // Redirect ke halaman dashboard
        exit;
    } else {
        echo "Password salah!";
    }
} else {
    echo "Email tidak ditemukan!";
}

$conn->close();
?>
