<?php
date_default_timezone_set('Asia/Jakarta');
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

$contoh = [
    "2018-09-19T00:00:00.000Z",
    "2018-09-19T01:30:00.000Z",
    "2018-09-19T02:30:00.000Z",
    "2018-09-19T03:30:00.000Z",
    "2018-09-19T04:30:00.000Z",
    "2018-09-19T05:30:00.000Z"
];


// $dates = array(); // Inisialisasi array untuk menyimpan tanggal

// while ($data_tanggal = mysqli_fetch_array($tanggal)) {
//     $dates[] = date("Y-m-d\TH:i:s.000P", strtotime($data_tanggal['tanggal']));
// }

// echo json_encode($dates); // Mengonversi array menjadi format JSON dan mencetaknya

while($data_tanggal = mysqli_fetch_array($tanggal)) {
    $tanggal_formatted = date("Y-m-d\TH:i:s.000\Z", strtotime($data_tanggal['tanggal']));
    echo '"'.$tanggal_formatted.'",';
}
// while($data_presentase = mysqli_fetch_array($presentase)){
//     echo $data_presentase['presentase'].',';
// }

// while($data_nilai = mysqli_fetch_array($nilai)){
//     echo $data_nilai['nilai'].',';
// }
$conn->close();
?>