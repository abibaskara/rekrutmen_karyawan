<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Data Keahlian</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Data Keahlian</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <a href="<?= base_url() ?>User/Tambah_Keahlian"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Keahlian</button></a>
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <?php $no = 1;
    foreach ($keahlian as $row) { ?>
        <div class="col-lg-12">
            <div class="card planned_task">
                <a href="<?= base_url() ?>User/Edit_Keahlian/<?= $row->id_keahlian ?>">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-1">
                                <h1 style="color: #56909f;"><?= $no++ ?> |</h1>
                            </div>
                            <div class="col-lg-11">
                                <h3><?= $row->keterampilan ?> <small style="color: #7b5555;"><?= $row->tingkat_keahlian_keterampilan ?></small></h3>
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