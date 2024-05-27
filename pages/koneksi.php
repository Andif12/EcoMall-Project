<?php 
$conn = mysqli_connect("localhost","root", "", "ecomall");

if (mysqli_connect_errno()) {
    echo "koneksi database error:". mysqli_connect_errno();
}
 
?>
