<?php
require 'control.php';

while($data_presentase = mysqli_fetch_array($presentase))
{
    echo $data_presentase['presentase'].',';
}
?>