<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Data Pengalaman</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Data Pengalaman</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <a href="<?= base_url() ?>User/Tambah_Pengalaman"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pengalaman</button></a>
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <?php foreach ($pengalaman as $row) { ?>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <a href="<?= base_url() ?>User/Edit_Pengalaman/<?= $row->id_pengalaman ?>">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-1">
                                <img src="<?= base_url() ?>assets/icon/work.png" class="rounded" style="width: 100%;">
                            </div>
                            <div class="col-lg-11">
                                <h3><?= $row->jabatan_terakhir ?></h3>
                                <p><i class="fa fa-location-arrow"> </i> <?= $row->perusahaan ?> <i class="fa fa-calendar"></i> <?= date('M-Y', strtotime($row->mulai_bekerja)) ?> s/d <?= date('M-Y', strtotime($row->berakhir_bekerja)) ?> <i class="fa fa-tags"></i> Rp.<?= number_format($row->gaji_pokok, 0, ',', ',')  ?></p>
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