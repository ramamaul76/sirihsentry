<?php
$host = 'localhost';
$database = 'sirihcentry';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_errno) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>