<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <?= $this->include("templates/head") ?>
</head>

<body class="light">
  <div id="app">
    <div id="main" class="layout-horizontal">
      <?= $this->include("templates/navbar") ?>

      <div class="content-wrapper container">
        <div class="page-heading">
          <h3>Dashboard</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col-12 col-lg-9">
              <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                          <div class="stats-icon purple mb-2">
                            <i class="iconly-boldShow"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                          <h6 class="text-muted font-semibold">
                          Tiket Terjual
                          </h6>
                          <h6 class="font-extrabold mb-0">112.000</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                          <div class="stats-icon blue mb-2">
                            <i class="iconly-boldProfile"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                          <h6 class="text-muted font-semibold">Penumpang Baru</h6>
                          <h6 class="font-extrabold mb-0">183.000</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                          <div class="stats-icon green mb-2">
                            <i class="iconly-boldAdd-User"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                          <h6 class="text-muted font-semibold">Semua Penumpang</h6>
                          <h6 class="font-extrabold mb-0">80.000</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                          <div class="stats-icon red mb-2">
                            <i class="iconly-boldBookmark"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                          <h6 class="text-muted font-semibold">Armada</h6>
                          <h6 class="font-extrabold mb-0">112</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Profile</h4>
                    </div>
                    <div class="card-body">
                      


                    </div>
                  </div>
                </div>
              </div>


              
              <div class="row">
                <div class="col-12 col-xl-4">
                  <div class="card">
                    <div class="card-header">
                      <h4>Trend Penumpang Per Bulan</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-8">
                  <div class="card">
                    <div class="card-header">
                      <h4>Penumpang Jurusan</h4>
                    </div>
                    <div class="card-body">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              
              <div class="card">
                <div class="card-header">
                  <h4>Trend Penumpang Per Point</h4>
                </div>
                <div class="card-content pb-4">
                  

                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h4>Trend Omzet per Route</h4>
                </div>
                <div class="card-body">
                 
                     
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      <?= $this->include("templates/footer") ?>
    </div>

  </div>

  <?= $this->include("templates/js") ?>
</body>

</html>