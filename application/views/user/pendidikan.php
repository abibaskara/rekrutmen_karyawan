<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Data Pendidikan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Data Pendidikan</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <a href="<?= base_url() ?>User/Tambah_Pendidikan"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pendidikan</button></a>
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <?php foreach ($pendidikan as $row) { ?>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <a href="<?= base_url() ?>User/Edit_Pendidikan/<?= $row->id_pendidikan ?>">
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="<?= base_url() ?>assets/icon/graduate.png" class="rounded" style="width: 70%;">
                            </div>
                            <div class="col-sm-10">
                                <h3><?= $row->nama_sekolah ?> <small><?= $row->pendidikan_terakhir ?></small></h3>
                                <p><i class="fa fa-location-arrow"> </i> <?= $row->kota ?> <i class="fa fa-calendar"></i> <?= date('M-Y', strtotime($row->start_year)) ?> s/d <?= date('M-Y', strtotime($row->end_year)) ?> <i class="fa fa-tags"></i> <?= $row->jurusan ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>


</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>