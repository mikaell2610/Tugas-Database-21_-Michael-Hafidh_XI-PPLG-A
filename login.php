<?php
session_start();
require('koneksi.php');


$nama = $_POST['nama'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE nama='$nama' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['nama'] = $nama;
    header("Location: login-page.php"); 
} else {
    echo "Login gagal. Silakan coba lagi.";
}
?>