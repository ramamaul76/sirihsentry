<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Daftar akun berhasil dilakukan."); window.location.href = "../index.php";</script>';
    } else {
        echo '<script>alert("Error: " . $sql . "<br>" . $conn->error;); window.history.back();</script>';
    }
}

$conn->close();
?>
