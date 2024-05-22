<?php
require 'koneksi.php';

$sql_ID = $conn->query("SELECT MAX(ID) as max_id FROM data_sensor");
$data_ID = $sql_ID->fetch_assoc();
$ID_akhir = $data_ID['max_id'];
$ID_awal = $ID_akhir - 6;

// baca informasi
$tanggal = mysqli_query($conn, "SELECT tanggal FROM data_sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY id asc");
// read suhu all data
$nilai = mysqli_query($conn, "SELECT nilai FROM data_sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY id asc");
$presentase = mysqli_query($conn, "SELECT presentase FROM data_sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY id asc");

?>