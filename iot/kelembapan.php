<?php
    require 'koneksi.php';

    $sql = $conn->query("SELECT * FROM data_sensor ORDER BY id DESC");
    // Memeriksa apakah query mengembalikan baris data
    if(mysqli_num_rows($sql) > 0) {
        $data = mysqli_fetch_array($sql);
        $presentase = $data['presentase'];
    } else {
        $presentase = 0;
    }

    echo $presentase;
?>
