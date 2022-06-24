<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Edit User</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin/User">Data User</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card profile-header">
            <div class="body">
                <div class="profile-image"> <img src="<?= base_url() ?>assets/profile/<?= $user['foto'] ?>" class="rounded-circle" alt="" style="width: 60%;"> </div>
                <div>
                    <h4 class="mb-0"><?= $user['nama_user']; ?></h4>
                    <span><?= $user['email'] ?></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>Info</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <small class="text-muted">Email address: </small>
                <p><?= $user['email'] ?></p>
                <hr>
                <small class="text-muted">Mobile: </small>
                <p><?= $user['no_telp'] ?></p>
                <hr>
                <small class="text-muted">Hak Akses: </small>
                <p class="mb-0"><?= $user['role'] ?></p>
                <hr>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <form action="<?= base_url() ?>Admin/editUser" method="POST" enctype="multipart/form-data">'
                <div class="body">
                    <h6>Account Data</h6>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $user['id_user'] ?>">
                                <input type="hidden" name="old_foto" value="<?= $user['foto'] ?>">
                                <input type="text" class="form-control" name="nama_user" value="<?= $user['nama_user'] ?>" placeholder="Nama User">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="no_telp" value="<?= $user['no_telp'] ?>" placeholder="No Telp">
                            </div>
                            <div class="form-group">
                                <select name="role" id="role" class="form-control" style="width: 100%;" required>
                                    <option value=""></option>
                                    <option value="Admin" <?= $user['role'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
                                    <option value="Supervisor" <?= $user['role'] == 'Supervisor' ? 'selected' : '' ?>>Supervisor</option>
                                    <option value="Manager" <?= $user['role'] == 'Manager' ? 'selected' : '' ?>>Manager</option>
                                    <option value="User" <?= $user['role'] == 'User' ? 'selected' : '' ?>>User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="old_password" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="new_password" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                <span id="message"></span>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="dropify" name="foto">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                    <a href="<?= base_url() ?>Admin/User"><button type="button" class="btn btn-default">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

<!-- DROPIFY -->
<script src="<?= base_url() ?>assets/vendor/dropify/js/dropify.min.js"></script>
<script src="<?= base_url() ?>assets/js/pages/forms/dropify.js"></script>

<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#role').select2({
            placeholder: 'Select a Role'
        });

        $('#password, #confirm_password').on('keyup', function() {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });
    });
</script>