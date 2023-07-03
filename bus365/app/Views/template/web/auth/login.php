<?php echo $this->extend('template/web/main') ?>

<?php echo $this->section('content') ?>
<?php echo $this->include('common/message') ?>

<div class="d-flex align-items-center justify-content-center text-center h-100vh">
    <div class="form-wrapper m-auto">
        <div class="form-container my-4">
            <div class="register-logo text-center mb-4">

            </div>
            <div class="panel">

                <form action="<?php echo base_url(route_to('auth-login'))?>" id="logindauth" method="post"
                    class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                    <?php echo $this->include('common/security') ?>
                    <div class="mb-3">
                        <div className="col-2">
                            <img src="" alt="" />
                        </div>
                        <input type="text" name="userid" class="form-control" id="emial" placeholder="Email or Mobile">
                        <!-- <div class="invalid-feedback text-start">Enter your valid email</div> -->
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="password-field"
                            placeholder="Password">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                    </div>
                    <div class="form-check mb-3 text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me next time
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Sign in</button>
                </form>

            </div>
            <!-- <a href="<?= base_url(route_to( 'admin-home' )) ?>" class="btn btn-success w-100">TEMP LOGIN</a> -->
            <div class="bottom-text text-center my-3">
                <!-- Don't have an account? <a href="register.html" class="fw-medium">Sign Up</a><br> -->

                <!-- Remind <a href="<?php echo base_url(route_to('forgetpassload'))?>" class="fw-medium">Password</a> -->
            </div>
        </div>
    </div>
</div>


<?php echo $this->endSection() ?>