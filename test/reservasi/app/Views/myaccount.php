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
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-light-primary color-primary alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-light-danger color-danger alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="page-content">
                    <section class="section">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Profile</h2>
                                        <p>Kelola daftar pengguna.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Personal -->
                                            <div class="col-md-6 col-12 ">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Personal</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <form method="POST"
                                                            action="<?= base_url('my-account/update-profil/' . $user['id']); ?>">
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <label for="">ID</label>
                                                                    <input type="text" class="form-control" id="id"
                                                                        name="id" value="<?= $user['id']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Nama</label>
                                                                    <input type="text" class="form-control" id="nama"
                                                                        name="nama" value="<?= $user['nama']; ?>"
                                                                        placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Email</label>
                                                                    <input type="email" class="form-control" id="email"
                                                                        name="email" value="<?= $user['email']; ?>"
                                                                        placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">No Handphone</label>
                                                                    <input type="number" class="form-control"
                                                                        id="no_telepon" name="no_telepon"
                                                                        value="<?= $user['no_telepon']; ?>"
                                                                        placeholder="">
                                                                </div>
                                                                <hr>
                                                                <h4>Posisi</h4>
                                                                <div class="form-group">
                                                                    <label for="">Role</label>
                                                                    <input type="text" class="form-control" id="role"
                                                                        name="role" value="<?= $user['role']; ?>"
                                                                        placeholder="" readonly>
                                                                </div>
                                                                <fieldset class="form-group">
                                                                    <label for="">Point</label>
                                                                    <select class="form-select" id="point" name="point"
                                                                        value="" placeholder="">
                                                                        <option value="">Pilih Point</option>
                                                                        <?php foreach ($grup_kota as $grup): ?>
                                                                            <optgroup label="<?php echo $grup ?>">
                                                                                <?php foreach ($kota[$grup] as $ktd): ?>
                                                                                    <option
                                                                                        value="<?php echo $ktd['kode_kota'] ?>" <?php if ($ktd['kode_kota'] == $user['point']) echo 'selected'; ?>>
                                                                                        <?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </optgroup>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">&nbsp;Simpan</button>
                                                            <button type="reset"
                                                                class="btn btn-danger">&nbsp;Batalkan</button>
                                                        </form>
                                                    </div>
                                                    <!-- End Personal -->
                                                </div>
                                            </div>
                                            <!-- Ganti Password -->
                                            <div class="col-md-6 col-12 ">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Ganti Password</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <form method="POST"
                                                            action="<?= base_url('my-account/update-password/' . $user['id']); ?>">
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <label for="">Password Lama</label>
                                                                    <input type="password" class="form-control" id="password"
                                                                        name="old_password" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Password Baru</label>
                                                                    <input type="password" class="form-control" id=""
                                                                        name="new_password" value="" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Ulangi Password Baru</label>
                                                                    <input type="password" class="form-control" id=""
                                                                        name="confirm_new_password" value="" placeholder="">
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">&nbsp;Ganti
                                                                Password Baru</button>
                                                            <button type="reset"
                                                                class="btn btn-danger">&nbsp;Batalkan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ganti Password -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
    </div>
    <?= $this->include("templates/footer") ?>

    </div>

    <?= $this->include("templates/js") ?>


</body>

</html>