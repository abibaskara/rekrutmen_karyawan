<!doctype html>
<html lang="en">

<head>
    <title>Login | Rekrutmen Karyawan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Informasi Rekrutmen Karyawan PT. Gading Megah Perkasa">
    <meta name="author" content="Sistem Informasi Rekrutmen Karyawan PT. Gading Megah Perkasa">

    <link rel="icon" href="<?= base_url(); ?>assets/icon.jpeg" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/sweetalert/sweetalert.css" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">



</head>

<body data-theme="light" class="font-nunito">
    <!-- WRAPPER -->
    <div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
    <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
    <div id="wrapper" class="theme-cyan">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="<?= base_url(); ?>assets/logo2.png" alt="PT Gading Megah Perkasa">
                        <h3 class="text-light" style="font-weight:bold;">PT Gading Megah Perkasa</h3>
                    </div>
                    <div class="card">
                        <div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
                        <div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
                        <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="<?= base_url(); ?>Auth/prosesLogin" method="POST">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <!-- <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span> -->
                                    <span>Don't have an account? <a href="<?= base_url() ?>Auth/Register">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

    <!-- SWEETALERT -->
    <script src="<?= base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
    <!-- page vendor js file -->
    <script src="<?= base_url(); ?>assets/vendor/toastr/toastr.js"></script>
    <script src="<?= base_url(); ?>assets/bundles/c3.bundle.js"></script>

    <!-- page js file -->
    <script src="<?= base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/js/index.js"></script> -->
    <script src="<?= base_url(); ?>assets/sweet.js"></script>
</body>

</html>