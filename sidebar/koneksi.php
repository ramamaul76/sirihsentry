<?php
$host = 'localhost';
$database = 'sirihcentry';
$username = 'root';
$password = '';

// Membuat koneksi ke database menggunakan MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_errno) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>