<?php 

require 'koneksi.php';

ini_set('date.timezone', 'Asia/Jakarta');

$now = new DateTime();
$datenow = $now->format("Y-m-d H:i:s");

$nilai = $_POST['nilai'];
$presentase = $_POST['presentase'];

$sql = "INSERT INTO data_sensor (tanggal, nilai, presentase) VALUES ('$datenow', '$nilai', '$presentase')";
if ($conn->query($sql) === TRUE) {
    echo "Data Successfully Recorded.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
