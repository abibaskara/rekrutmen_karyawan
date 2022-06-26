<!doctype html>
<html lang="en">

<head>
    <title>Register | Rekrutmen Karyawan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Informasi Rekrutmen Karyawan PT. Gading Megah Perkasa">
    <meta name="author" content="Sistem Informasi Rekrutmen Karyawan PT. Gading Megah Perkasa">

    <link rel="icon" href="<?= base_url(); ?>assets/icon.jpeg" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/sweetalert/sweetalert.css" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">

</head>

<body data-theme="light" class="font-nunito">
    <!-- WRAPPER -->
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
                            <p class="lead">Create an account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="<?= base_url() ?>Auth/daftar" method="POST">
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Nama</label>
                                    <input type="text" class="form-control" id="signup-email" name="nama" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signup-email" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">No Telp</label>
                                    <input type="text" class="form-control" id="signup-email" name="no_telp" placeholder="Your Telephone" required>
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Your Password" required>
                                    <span id='message'></span>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                                <div class="bottom">
                                    <span class="helper-text">Already have an account? <a href="<?= base_url() ?>/">Login</a></span>
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
    <script src="<?= base_url(); ?>assets/js/index.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/alert.js"></script> -->

    <script src="<?= base_url(); ?>assets/sweet.js"></script>
    <script>
        $(document).ready(function() {
            $('#password, #confirm_password').on('keyup', function() {
                if ($('#password').val() == $('#confirm_password').val()) {
                    $('#message').html('Matching').css('color', 'green');
                } else
                    $('#message').html('Not Matching').css('color', 'red');
            });
        });
    </script>
</body>

</html>