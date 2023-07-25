<link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap-icons/bootstrap-icons.css') ?>">

<header class="mb-5">
  <div class="header-top">
    <div class="container">
      <div class="logo">
        <a href="index.html"><img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" srcset=""></a>
      </div>

      <?php if (session()->get('role') == 'Admin') { ?>
        <div class="header-top-right">
          <div class="dropdown">
            <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="avatar avatar-md2">
                <img src="<?= base_url('assets/images/faces/1.jpg') ?>" alt="Avatar">
              </div>
              <div class="text">
                <h6 class="user-dropdown-name"><?= session()->get('nama') ?></h6>
                <p class="user-dropdown-status text-sm text-muted">
                  <?= session()->get('role') ?>
                </p>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
              <li><a class="dropdown-item" href="<?=base_url("my-account/")?>">My Account</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a>
              </li>
            </ul>
          </div>

          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </div>
      <?php }; ?>

      <?php if (session()->get('role') == 'Staff1') { ?>
        <div class="header-top-right">
        <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item">
                    <a href="<?= base_url('settlementtiket') ?>">
                      <i class="bi bi-cash fs-4"></i><span class="badge bg-danger"> <?=  'Rp. ' . number_format( session('settlementtiket'), 0, ',', '.') . ',-';?></span>
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-lg-0">
                </ul>
        <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item">
                    <a href="<?= base_url('settlementpaket') ?>">
                      <i class="bi bi-wallet fs-4"></i><span class="badge bg-danger"> <?=  'Rp. ' . number_format( session('settlementpaket'), 0, ',', '.') . ',-';?></span>
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-lg-0">
                </ul>
          <div class="dropdown">
            <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="avatar avatar-md2">
                <img src="<?= base_url('assets/images/faces/1.jpg') ?>" alt="Avatar">
              </div>
              <div class="text">
                <h6 class="user-dropdown-name"><?= session()->get('nama') ?></h6>
                <p class="user-dropdown-status text-sm text-muted">
                  <?= session()->get('role') ?>
                </p>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
              <li><a class="dropdown-item" href="#">My Account</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a>
              </li>
            </ul>
          </div>

          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </div>
      <?php }; ?>

      <?php if (session()->get('role') == 'Staff2') { ?>
        <div class="header-top-right">
        <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item">
                    <a href="<?= base_url('settlementtiket') ?>">
                      <i class="bi bi-cash fs-4"></i><span class="badge bg-danger"><?=  'Rp. ' . number_format( session('settlementtiket'), 0, ',', '.') . ',-';?></span>
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-lg-0">
                </ul>
        <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item">
                    <a href="<?= base_url('settlementpaket') ?>">
                      <i class="bi bi-wallet fs-4"></i><span class="badge bg-danger"><?=  'Rp. ' . number_format( session('settlementpaket'), 0, ',', '.') . ',-';?></span>
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-lg-0">
                </ul>
          <div class="dropdown">
            <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="avatar avatar-md2">
                <img src="<?= base_url('assets/images/faces/1.jpg') ?>" alt="Avatar">
              </div>
              <div class="text">
                <h6 class="user-dropdown-name"><?= session()->get('nama') ?></h6>
                <p class="user-dropdown-status text-sm text-muted">
                  <?= session()->get('role') ?>
                </p>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
              <li><a class="dropdown-item" href="<?=base_url("my-account/")?>">My Account</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a>
              </li>
            </ul>
          </div>

          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </div>
      <?php }; ?>
    </div>
  </div>

  <nav class="main-navbar">
    <div class="container">
      <ul>
        <li class="menu-item">
          <a href="<?= base_url('/') ?>" class='menu-link'>
            <span><i class="bi bi-grid-fill"></i> Beranda</span>
          </a>
        </li>

        <li class="menu-item has-sub">
          <a href="#" class='menu-link'>
            <span><i class="bi bi-stack"></i> Master</span>
          </a>
          <div class="submenu">
            <div class="submenu-group-wrapper">
              <ul class="submenu-group">
                <li class="submenu-item ">
                  <a href="<?= base_url('tampildata-mobil') ?>">Mobil</a>
                </li>
                <li class="submenu-item ">
                  <a href="">Sopir</a>
                </li>
                <li class="submenu-item ">
                  <a href="<?= base_url('tampildata-diskon') ?>">Discount</a>
                </li>
                <li class="submenu-item ">
                  <a href="<?= base_url('tampildata-pelanggan') ?>">Pelanggan</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-button.html">Perizinan Sistem</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="menu-item has-sub">
          <a href="#" class='menu-link'>
            <span><i class="bi bi-grid-1x2-fill"></i> Jadwal</span>
          </a>
          <div class="submenu">
            <div class="submenu-group-wrapper">
              <ul class="submenu-group">
                <li class="submenu-item ">
                  <a href="<?= base_url('jadwal') ?>">Buka Jadwal</a>
                </li>
                <li class="submenu-item ">
                  <a href="<?= base_url('jadwalmultiroute') ?>">Buka Jadwal Multi Route</a>
                </li>
                <li class="submenu-item ">
                  <a href="<?= base_url('kelola-jadwal') ?>">Kelola Jadwal</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="menu-item">
          <a href="<?= base_url('reservation') ?>" class='menu-link'>
            <span><i class="bi bi-file-earmark-medical-fill"></i> Reservasi</span>
          </a>
        </li>

        <li class="menu-item has-sub">
          <a href="#" class='menu-link'>
            <span><i class="bi bi-pen-fill"></i> Riwayat</span>
          </a>
          <div class="submenu">
            <div class="submenu-group-wrapper">
              <ul class="submenu-group">
                <li class="submenu-item ">
                  <a href="<?= base_url('settlement') ?>">Settlement</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="menu-item has-sub">
          <a href="#" class='menu-link'>
            <span><i class="bi bi-plus-square-fill"></i> Keuangan</span>
          </a>
          <div class="submenu">
            <div class="submenu-group-wrapper">
              <ul class="submenu-group">
                <li class="submenu-item ">
                  <a href="<?= base_url('bukubesar') ?>">Buku Besar</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="menu-item  has-sub">
          <a href="#" class='menu-link'>
            <span><i class="bi bi-file-earmark-fill"></i> Laporan</span>
          </a>
          <div class="submenu">
            <div class="submenu-group-wrapper">
              <ul class="submenu-group">
                <li class="submenu-item ">
                  <a href="form-editor-quill.html">Daily Report</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-ckeditor.html">Laporan Per Point</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-summernote.html">Laporan Per Jurusan</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-tinymce.html">Laporan Detail Penjualan Tiket</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-tinymce.html">Laporan Okupansi Per Jadwal</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-tinymce.html">Laporan BOP</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-tinymce.html">Laporan Detail Penjualan Paket</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-tinymce.html">Laporan Settlement</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-ckeditor.html">Laba Rugi</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </nav>
</header>