<?php
require 'control.php';

while($data_tanggal = mysqli_fetch_array($tanggal))
{
    $tanggal_formatted = date("Y-m-d\TH:i:s.000\Z", strtotime($data_tanggal['tanggal']));
    echo '"'.$tanggal_formatted.'",';
}
?>