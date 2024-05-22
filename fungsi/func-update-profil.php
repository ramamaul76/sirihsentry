<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo '<script>alert("Harus login terlebih dahulu."); window.location.href = "../index.php";</script>';
    exit();
}

require 'koneksi.php';

$user_id = $conn->real_escape_string($_SESSION['user_id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['fullName']);
    $about = $conn->real_escape_string($_POST['about']);
    $job = $conn->real_escape_string($_POST['job']);
    // $country = $conn->real_escape_string($_POST['country']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);

    // Query SQL untuk memperbarui data pengguna
    $sql = "UPDATE user SET name='$name', about='$about', job='$job', address='$address', phone='$phone' WHERE id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data akun berhasil di perbarui."); window.location.href = "../users-profile.php";</script>';
    } else {
        echo '<script>alert("Error updating data: " . $conn->error;"); window.location.href = "../users-profile.php";</script>';
    }
}

$conn->close();
?>
