<?php
session_start();

// Pastikan user telah login sebelum mengakses halaman ini
if (!isset($_SESSION['user_id'])) {
    echo '<script>alert("Harus login terlebih dahulu."); window.location.href = "index.php";</script>';
    exit();
}

require 'koneksi.php';
$user_id = $conn->real_escape_string($_SESSION['user_id']);

// country
$query = "SELECT name, job, about, address, phone FROM user WHERE id='$user_id'";
$result = $conn->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $name = !empty($user['name']) ? $user['name'] : '-';
        $job = !empty($user['job']) ? $user['job'] : '-';
        $about = !empty($user['about']) ? $user['about'] : '-';
        // $country = !empty($user['country']) ? $user['country'] : '-';
        $address = !empty($user['address']) ? $user['address'] : '-';
        $phone = !empty($user['phone']) ? $user['phone'] : '-';
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "Error: " . $conn->error;
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Akun</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <?php
    require 'header.php';
    ?>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-heading">Data Akun</li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Beranda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="tables-general.php">
            <i class="bi bi-menu-button-wide"></i>
            <span>Laporan Data</span>
          </a>
        </li>
        <!-- End Main Nav -->

        <li class="nav-heading">Users</li>

        <li class="nav-item">
          <a class="nav-link" href="users-profile.php">
            <i class="bi bi-person"></i>
            <span>Akun</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <!-- Start #main -->
    <?php
    // require 'dashboard.php'
    ?>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    // require 'footer.php';
    ?>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/hidden-lonceng.js"></script>
  </body>
</html>
