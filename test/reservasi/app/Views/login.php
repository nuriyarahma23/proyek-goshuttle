<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <?= $this->include("templates/head") ?>
  <link rel="stylesheet" href="<?= base_url('assets/css/pages/auth.css') ?>">
</head>

<body data-new-gr-c-s-check-loaded="14.1110.0" data-gr-ext-installed="">
  <div id="auth">
    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <div class="auth-logo">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" srcset="">
          </div>
          <form method="post" action="<?= base_url('proses_login'); ?>">
            <h4 class="auth-title">Masukkan username dan password</h4>
            <?php if (session()->getFlashdata('status')) : ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('status') ?></div>
            <?php endif; ?>

            <div class="form-group">
              <input autofocus="autofocus" type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-success btn-block">
              Login
            </button>

          </form>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right" style="background-image: url(<?= base_url('assets/images/bg/02a34771e0a6fed3b5f22dabf54c32b7.jpg') ?>);background-size: cover;background-position: center; ">
        </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>