<?php
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Simpan ID pengguna ke dalam sesi
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $name = $user['name'];
    echo '<script>alert("Berhasil Masuk. Selamat datang ' . strtolower($name) . '"); window.location.href = "../dashboard.php";</script>';
    exit();
} else {
    echo '<script>alert("Nama pengguna atau kata sandi salah. Silakan coba lagi."); window.history.back();</script>';
}

$conn->close();
?>
