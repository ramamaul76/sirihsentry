<?php
require 'control.php';

while($data_nilai = mysqli_fetch_array($nilai))
{
    echo $data_nilai['nilai'].',';
}
?>