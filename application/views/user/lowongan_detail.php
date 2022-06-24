<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Detail Lowongan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="index.html">Cari Lowongan Kerja</a></li>
                <li class="breadcrumb-item active">Detail Lowongan</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <!-- <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button> -->
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="header">
                <h3 style="font-weight: bold;">Lowongan Kerja <?= $lowongan['nama_lowongan'] ?></h3>
                <p><i class="fa fa-building"></i> <?= $lowongan['nama_departement'] ?> <i class="fa fa-money"></i> Rp.<?= number_format($lowongan['salary'], 0, ',', ',') ?></p>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <p style="font-size: 15px; font-weight: bold;">Maksimal Usia:</p>
                        <p style="margin-top: -15px;"><?= $lowongan['max_usia'] ?> Tahun</p>
                    </div>
                    <div class="col-3">
                        <p style="font-size: 15px; font-weight: bold;">Minimal Pendidikan:</p>
                        <p style="margin-top: -15px;"><?= $lowongan['min_pend'] ?></p>
                    </div>
                    <div class="col-3">
                        <p style="font-size: 15px; font-weight: bold;">Jurusan Pendidikan:</p>
                        <p style="margin-top: -15px;"><?= $lowongan['jurusan_pend'] ?></p>
                    </div>
                    <div class="col-3">
                        <p style="font-size: 15px; font-weight: bold;">Waktu Lamaran:</p>
                        <p style="margin-top: -15px;"><?= $lowongan['tgl_close'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="body">
                <h5 style="font-weight: bold;">Deskripsi :</h5>
                <p class="text-justify"><?= $lowongan['deskripsi'] ?></p>

                <hr>

                <h5 style="font-weight: bold;">Kriteria :</h5>
                <p class="text-justify"><?= $lowongan['kriteria'] ?></p>

                <hr>
                <a href="<?= base_url() ?>User/Apply/<?= $lowongan['id_lowongan'] ?>"><button class="btn btn-primary"> Apply</button></a>

            </div>
        </div>
    </div>

</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>