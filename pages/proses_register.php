<<<<<<< HEAD
<?php
require 'config.php';
include 'koneksi.php';

session_start();

$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$no_telpon = $_POST['no_telpon'];
$username = $_POST['username'];
$password = password_hash($_POST['password'] . PEPPER, PASSWORD_DEFAULT);

// Konversi jenis kelamin menjadi 'L' atau 'P'
if ($jenis_kelamin == 'Laki-laki') {
    $jenis_kelamin = 'L';
} else {
    $jenis_kelamin = 'P';
}

$nama = $conn->real_escape_string($nama);
$tempat_lahir = $conn->real_escape_string($tempat_lahir);
$tanggal_lahir = $conn->real_escape_string($tanggal_lahir);
$jenis_kelamin = $conn->real_escape_string($jenis_kelamin);
$email = $conn->real_escape_string($email);
$no_telpon = $conn->real_escape_string($no_telpon);
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM data_pengguna WHERE email=? OR username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "Email atau Username sudah terdaftar. Silakan gunakan yang lain.";
} else {
    $insert_sql = "INSERT INTO data_pengguna (nama, tempat_lahir, tanggal_lahir, jenis_kelamin, email, no_telpon, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("ssssssss", $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $email, $no_telpon, $username, $password);

    if ($insert_stmt->execute()) {
        echo "Registrasi berhasil.";

        $_SESSION['username'] = $username;

        header('Location: shop.html');
        exit();
    } else {
        echo "Error: " . $insert_stmt->error;
    }

    $insert_stmt->close();
}

$stmt->close();
$conn->close();
?>
=======
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
>>>>>>> 454996a8ec97df733233d36ad3bd3b6e346d1fcf
