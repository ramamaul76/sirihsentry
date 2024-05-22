<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $newPassword = $_POST["password"];

    $checkUsernameQuery = "SELECT * FROM user WHERE username = '$username'";
    $checkUsernameResult = $conn->query($checkUsernameQuery);

    if ($checkUsernameResult->num_rows > 0) {
        $updatePasswordQuery = "UPDATE user SET password = '$newPassword' WHERE username = '$username'";
        
        if ($conn->query($updatePasswordQuery) === TRUE) {
            echo '<script>alert("Kata sandi berhasil diperbarui."); window.location.href = "../index.php";</script>';
        } else {
            echo '<script>alert("Error: ' . $conn->error . '"); window.history.back();</script>';
        }
    } else {
        echo '<script>alert("Nama pengguna tidak ditemukan."); window.history.back();</script>';
    }
}

$conn->close();
?>
