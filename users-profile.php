<?php
require 'sidebar/sidebar-profile.php';
?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Akun</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Beranda</a></li>
        <li class="breadcrumb-item active">Akun</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div
            class="card-body profile-card pt-4 d-flex flex-column align-items-center"
          >
            <img
              src="assets/img/profile.jpg"
              alt="Profile"
              class="rounded-circle"
            />
            <h2><?php echo $name; ?></h2>
            <h3><?php echo $job; ?></h3>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button
                  class="nav-link active"
                  data-bs-toggle="tab"
                  data-bs-target="#profile-overview"
                >
                  Data Akun
                </button>
              </li>

              <li class="nav-item">
                <button
                  class="nav-link"
                  data-bs-toggle="tab"
                  data-bs-target="#profile-edit"
                >
                  Edit Data Akun
                </button>
              </li>

              <li class="nav-item">
                <button
                  class="nav-link"
                  data-bs-toggle="tab"
                  data-bs-target="#profile-change-password"
                >
                  Ubah Kata Sandi
                </button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div
                class="tab-pane fade show active profile-overview"
                id="profile-overview"
              >
                <h5 class="card-title">Tentang</h5>
                <p class="small fst-italic">
                  <?php echo $about; ?>
                </p>

                <h5 class="card-title">Detail Profil</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                  <div class="col-lg-9 col-md-8"><?php echo $name; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                  <div class="col-lg-9 col-md-8"><?php echo $job; ?></div>
                </div>

                <!-- <div class="row">
                  <div class="col-lg-3 col-md-4 label">Negara</div>
                  <div class="col-lg-9 col-md-8"><?php echo $country; ?></div>
                </div> -->

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Alamat</div>
                  <div class="col-lg-9 col-md-8">
                    <?php echo $address; ?>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Telepon</div>
                  <div class="col-lg-9 col-md-8"><?php echo $phone; ?></div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <!-- Profile Edit Form -->
                <form action="fungsi/func-update-profil.php" method="POST">

                  <div class="row mb-3">
                    <label
                      for="fullName"
                      class="col-md-4 col-lg-3 col-form-label"
                      >Nama Lengkap</label
                    >
                    <div class="col-md-8 col-lg-9">
                      <input
                        name="fullName"
                        type="text"
                        class="form-control"
                        id="fullName"
                        value="<?php echo $name; ?>"
                      />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label"
                      >Tentang</label
                    >
                    <div class="col-md-8 col-lg-9">
                      <textarea
                        name="about"
                        class="form-control"
                        id="about"
                        style="height: 100px"
                      ><?php echo $about; ?></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Job" class="col-md-4 col-lg-3 col-form-label"
                      >Pekerjaan</label
                    >
                    <div class="col-md-8 col-lg-9">
                      <input
                        name="job"
                        type="text"
                        class="form-control"
                        id="Job"
                        value="<?php echo $job; ?>"
                      />
                    </div>
                  </div>

                  <!-- <div class="row mb-3">
                    <label
                      for="Country"
                      class="col-md-4 col-lg-3 col-form-label"
                      >Negara</label
                    >
                    <div class="col-md-8 col-lg-9">
                      <input
                        name="country"
                        type="text"
                        class="form-control"
                        id="Country"
                        value="<?php echo $country; ?>"
                      />
                    </div>
                  </div> -->

                  <div class="row mb-3">
                    <label
                      for="Address"
                      class="col-md-4 col-lg-3 col-form-label"
                      >Alamat</label
                    >
                    <div class="col-md-8 col-lg-9">
                      <input
                        name="address"
                        type="text"
                        class="form-control"
                        id="Address"
                        value="<?php echo $address; ?>"
                      />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label"
                      >Telepon</label
                    >
                    <div class="col-md-8 col-lg-9">
                      <input
                        name="phone"
                        type="text"
                        class="form-control"
                        id="Phone"
                        value="<?php echo $phone; ?>"
                      />
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-2">
                      Simpan Perubahan
                    </button>
                  </div>
                </form>
                <!-- End Profile Edit Form -->
              </div>

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form action="fungsi/func-update-pass.php" method="POST">

                  <div class="row mb-3">
                    <label
                      for="newPassword"
                      class="col-md-4 col-lg-3 col-form-label"
                      >Kata Sandi Baru</label
                    >
                    <div class="col-md-8 col-lg-9">
                      <input
                        name="newpassword"
                        type="password"
                        class="form-control"
                        id="newPassword"
                        required
                      />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label
                      for="renewPassword"
                      class="col-md-4 col-lg-3 col-form-label"
                      >Konfirmasi Kata Sandi Baru</label
                    >
                    <div class="col-md-8 col-lg-9">
                      <input
                        name="renewpassword"
                        type="password"
                        class="form-control"
                        id="renewPassword"
                        required
                      />
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Simpan Perubahan
                    </button>
                  </div>
                </form>
                <!-- End Change Password Form -->
              </div>
            </div>
            <!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- End #main -->
<?php
require 'footer.php';
?>
