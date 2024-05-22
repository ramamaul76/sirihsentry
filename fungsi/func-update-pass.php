<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo '<script>alert("Harus login terlebih dahulu."); window.location.href = "../index.php";</script>';
    exit();
}

require 'koneksi.php';
$user_id = $conn->real_escape_string($_SESSION['user_id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $conn->real_escape_string($_POST['newpassword']);
    $reenter_password = $conn->real_escape_string($_POST['renewpassword']);

    // Pengecekan apakah password yang dimasukkan sama pada kedua kolom
    if ($reenter_password === $new_password) {
        $sql = "UPDATE user SET password='$reenter_password' WHERE id='$user_id'";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Kata Sandi berhasil di ganti."); window.location.href = "../users-profile.php";</script>';
        } else {
            echo '<script>alert("Error updating data: ' . $conn->error . '"); window.history.back();</script>';
        }
    } else {
        // Password tidak sama, kembali ke halaman change-pass.php
        echo '<script>alert("Kata Sandi yang dimasukkan tidak cocok. Silakan coba lagi."); window.history.back();</script>';
    }
}

$conn->close();
?>
