<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Dashboard</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i></a></li>
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

<div class="row clearfix row-deck">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body">
                <div class="icon"><i class="fa fa-briefcase"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Lowongan</div>
                    <h4 class="number mb-0"><?= $lowongan['Total'] ?></h4>
                    <small class="text-muted">Jumlah lowongan yang aktif</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body">
                <div class="icon"><i class="fa fa-users"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Calon Pelamar</div>
                    <h4 class="number mb-0"><?= $calon_pelamar['Total'] ?></h4>
                    <small class="text-muted">Jumlah calon pelamar yang belum diproses</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body">
                <div class="icon"><i class="fa fa-thumbs-up"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Pelamar Diterima</div>
                    <h4 class="number mb-0"><?= $pelamar_diterima['Total'] ?></h4>
                    <small class="text-muted">Jumlah pelamar diterima</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body">
                <div class="icon"><i class="fa  fa-thumbs-down"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Pelamar Tidak Diterima</div>
                    <h4 class="number mb-0"><?= $pelamar_tidak_terima['Total'] ?></h4>
                    <small class="text-muted">Jumlah pelamar tidak diterima</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>