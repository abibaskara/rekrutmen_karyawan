<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Setting</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Supervisor"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Setting</li>
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
                <div class="profile-image"> <img src="<?= base_url() ?>assets/profile/<?= $_SESSION['foto'] ?>" class="rounded-circle" alt="" style="width: 60%;"> </div>
                <div>
                    <h4 class="mb-0"><?= $_SESSION['nama_user']; ?></h4>
                    <span><?= $_SESSION['email'] ?></span>
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
                <p><?= $_SESSION['email'] ?></p>
                <hr>
                <small class="text-muted">Mobile: </small>
                <p><?= $_SESSION['no_telp'] ?></p>
                <hr>
                <small class="text-muted">Hak Akses: </small>
                <p class="mb-0"><?= $_SESSION['role'] ?></p>
                <hr>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <form action="<?= base_url() ?>Supervisor/change_password" method="POST" enctype="multipart/form-data">'
                <div class="body">
                    <h6>Account Data</h6>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
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
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                    <a href="<?= base_url() ?>Supervisor"><button type="button" class="btn btn-default">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>