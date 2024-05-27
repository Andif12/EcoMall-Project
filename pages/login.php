<?php
session_start();

require 'config.php';
include 'koneksi.php';

$identifier = $_POST['identifier'];
$password = $_POST['password'];

$identifier = $conn->real_escape_string($identifier);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM data_pengguna WHERE email=? OR username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $identifier, $identifier);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $peppered_password = $password . PEPPER;
    
    if (password_verify($peppered_password, $row['password'])) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['nama'] = $row['nama'];
        header("Location: shop.html");
        exit;
    } else {
        echo "Password salah!";
    }
} else {
    echo "Email atau Username tidak ditemukan!";
}

$stmt->close();
$conn->close();
?>
