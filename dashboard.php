<?php
require 'sidebar/sidebar-dashboard.php'
?>
<main id="main" class="main">
      <div class="pagetitle">
        <h1>Beranda</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Beranda</a></li>
            <li class="breadcrumb-item active">Beranda</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Nilai</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-thermometer-half"></i>
                      </div>
                      <div class="ps-3">
                        <h6><span id="nilai">0</span></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">Kelembaban</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-droplet-half"></i>
                      </div>
                      <div class="ps-3">
                        <h6><span id="kelembapan">0</span>%</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Kondisi</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-clipboard2-pulse"></i>
                      </div>
                      <div class="ps-3">
                        <h6>Tanah</h6>
                        <span class="text-muted small pt-2 ps-1" id="kondisi">Kering</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Customers Card -->
            </div>
            <!-- Education Traffic -->
            <div class="card">
              <div class="card-body pb-0">
                <h5 class="card-title">Edukasi</h5>

                <div class="news">
                  <div class="post-item clearfix">
                    <img src="assets/img/01.jpg" alt="" />
                    <h4><a href="article-01.php">Segudang Manfaat Daun Sirih</a></h4>
                    <p>
                      Daun sirih sudah digunakan sebagai obat alami untuk mengatasi sejumlah...
                    </p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/02.jpg" alt="" />
                    <h4><a href="article-02.php">Mengungkap Kaya Akan Khasiat</a></h4>
                    <p>
                      Di antara keberagaman rempah-rempah dan tumbuhan obat yang ada di alam...
                    </p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/03.jpg" alt="" />
                    <h4>
                      <a href="article-03.php"
                        >Panduan Praktis: Cara Penanaman Tanaman Daun Sirih di Rumah</a
                      >
                    </h4>
                    <p>
                    Daun sirih <em>(piper betle)</em> telah menjadi bagian tak terpisahkan dari budaya dan tradisi...
                    </p>
                  </div>
                </div>
                <!-- End sidebar recent posts-->
              </div>
            </div>
            <!-- End Education -->
          </div>
          <!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">
            <!-- Tips Traffic -->
            <div class="card">
              <div class="card-body pb-0">
                <h5 class="card-title">Tips</h5>

                
                <div class="news">

                <!-- <div class="post-item clearfix">
                    <img src="assets/img/isi-tips-1.jpg" alt="" />
                    <h4><a href="tips-01.php">Mengenal Mikrokontroler</a></h4>
                    <p>
                      ESP32 adalah sebuah mikrokontroler yang populer...
                    </p>
                  </div> -->

                  <div class="post-item clearfix">
                    <img src="assets/img/isi-tips-2.jpg" alt="" />
                    <h4><a href="tips-02.php">Penggunaan Alat IoT: ESP32 dan Sensor Kelembapan Tanah (Sensor Soil Moisture)</a></h4>
                    <p>
                     Langkah-langkah umum untuk menggunakan ESP32..
                    </p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/isi-tips-3.jpg" alt="" />
                    <h4><a href="tips-03.php">Memahami Perawatan Alat IoT</a></h4>
                    <p>
                      Beberapa langkah perawatan yang dapat dilakukan...
                    </p>
                  </div>
                </div>
                <!-- End sidebar recent posts-->
              </div>
            </div>
            <!-- End Tips -->
          </div>
          <!-- End Right side columns -->
        </div>
      </section>
    </main>
    <!-- End #main -->
<?php
require 'footer.php';
?>