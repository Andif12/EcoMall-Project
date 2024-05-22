<?php

require 'config.php';
include 'koneksi.php';

$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$no_telpon = $_POST['no_telpon'];
$password = $_POST['password'];

// Mencegah SQL Injection
$nama = $conn->real_escape_string($nama);
$tempat_lahir = $conn->real_escape_string($tempat_lahir);
$tanggal_lahir = $conn->real_escape_string($tanggal_lahir);
$jenis_kelamin = $conn->real_escape_string($jenis_kelamin);
$email = $conn->real_escape_string($email);
$no_telpon = $conn->real_escape_string($no_telpon);
$password = $conn->real_escape_string($password);

$peppered_password = $password . PEPPER;

// Hashing password yang sudah diberi pepper
$hashed_password = password_hash($peppered_password, PASSWORD_DEFAULT);

$sql = "INSERT INTO data_pengguna (nama, tempat_lahir, tanggal_lahir, jenis_kelamin, email, no_telpon, password)
        VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$email', '$no_telpon', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
