<?php
require 'sidebar/sidebar-table.php'
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Beranda</a></li>
          <li class="breadcrumb-item active">Laporan Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section" id="realtime" >
      <div class="row justify-content-center">
        <!-- Reports -->
        <div class="col-10">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Grafik Sensor Soil Moisture</h5>

                    <!-- Line Chart -->
                    <div id="reportsChart"></div>

                    <!-- Koneksi ke Database -->
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
                    <!-- End Koneksi -->
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(
                          document.querySelector("#reportsChart"),
                          {
                            series: [
                              {
                                name: "Nilai",
                                data: [<?php
                                while($data_nilai = mysqli_fetch_array($nilai))
                                {
                                    echo $data_nilai['nilai'].',';
                                }
                                ?>],
                              },
                              {
                                name: "Persentase",
                                data: [<?php
                                while($data_presentase = mysqli_fetch_array($presentase))
                                {
                                    echo $data_presentase['presentase'].',';
                                }
                                ?>],
                              },
                            ],
                            chart: {
                              height: 350,
                              type: "area",
                              toolbar: {
                                show: false,
                              },
                            },
                            markers: {
                              size: 4,
                            },
                            colors: ["#4154f1", "#2eca6a"],
                            fill: {
                              type: "gradient",
                              gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.3,
                                opacityTo: 0.4,
                                stops: [0, 90, 100],
                              },
                            },
                            dataLabels: {
                              enabled: false,
                            },
                            stroke: {
                              curve: "smooth",
                              width: 2,
                            },
                            xaxis: {
                              type: "datetime",
                              categories: [
                                // "2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z"
                                <?php
                                    while($data_tanggal = mysqli_fetch_array($tanggal))
                                    {
                                        $tanggal_formatted = date("Y-m-d\TH:i:s.000\Z", strtotime($data_tanggal['tanggal']));
                                        echo '"'.$tanggal_formatted.'",';
                                    }
                                ?>
                              ],
                            },
                            tooltip: {
                              x: {
                                format: "dd/MM/yy HH:mm",
                              },
                            },
                          }
                        ).render();
                      });
                    </script>
                    <!-- End Line Chart -->
                  </div>
                </div>
        </div>
        <!-- End Reports -->
        <!-- table report -->
        <div class="col-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Sensor Soil Moisture</h5>

              <!-- Table with stripped rows -->
              <table id="dataTable" class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Persentase</th>
                    <th scope="col">Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // Query to fetch the last 10 records
                    $result_sensor = mysqli_query($conn, "SELECT * FROM data_sensor ORDER BY ID DESC LIMIT 10");
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result_sensor)) {
                        $tanggal = date('d/m/Y', strtotime($row['tanggal']));
                        $waktu = date('H:i', strtotime($row['tanggal']));
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $tanggal; ?></td>
                            <td><?php echo $waktu; ?></td>
                            <td><?php echo $row['presentase']; ?>%</td>
                            <td><?php echo $row['nilai']; ?></td>
                        </tr>
                  <?php
                }
                ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
        <!-- end report table -->
      </div>
    </section>

  </main><!-- End #main -->
<?php
require 'footer.php';
?>