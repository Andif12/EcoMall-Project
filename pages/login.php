<!DOCTYPE html>
<title>Form Login</title>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Andi Magfirah Maqbul-221011048">
    <meta name="author" content="Andi Muhammad Kasyful Anwar-221011113">
    <meta name="author" content="Arif Hidayat-221011023">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ctrl+shift+M untuk cek tampilan web-->
    <meta name="description" content="Latihan menggunakan CSS Sederhana">
    <link rel="shortcut icon" href="green_1.jpeg"> 
    <link rel="stylesheet" href="cssLogin.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Untuk menambahkan logo-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Font+Name&display=swap"> <!--font melalui Google Fonts -->
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <div class="remember-me">
                <input type="checkbox" checked="checked" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <button type="submit">Log in</button>

            <div class="login-footer">
                <button class="login-button google-button" type="submit">
                    <i class="fa fa-google"></i> | Log in With Google
                </button>
            </div>
            
            <p class="message">Don't have an account? 
                <a class="massage"  data-bs-toggle="modal" data-bs-target="#myModal">Sign Up</a>
            </p>
    
            <div class="forgot-pw">
                <label for="forgot-pw" type="submit">
                    <a data-bs-toggle="modal" data-bs-target="#myModal2">Forgot Password?</a>
                </label>
            </div>
        </form>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h4 class="modal-title">Registration page</h4>
                    <button type="button" class="btn-close text-red" data-bs-dismiss="modal" title="Keluar dari laman pendaftaran"></button>
                </div>
                
                <div class="modal-body">
                    <form class="register-form">
                        <input type="text" placeholder="Nama">
                        <input type="email" placeholder="Email">
                        <input type="date" placeholder="Tanggal lahir">
                        <div>
                        <label>Jenis Kelamin</label>
                        <select>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                        <label>Agama</label>
                        <select name="Agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Khonghucu</option>
                        </select>
                        </div>
                        <label>Buat Password</label>
                        <input type="password" placeholder="Password">
                        <button type="submit" onclick="alert('Pastikan data anda telah benar')" >Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 2 -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

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
