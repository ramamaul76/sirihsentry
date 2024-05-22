<?php
session_start();

session_unset();
session_destroy();
?>

<script>
    alert("Berhasil keluar, sampai jumpa kembali.");
    window.location.href = "index.php";
</script>
