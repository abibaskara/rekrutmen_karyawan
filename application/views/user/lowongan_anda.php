<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="flash-data-nilai" data-flashdata="<?= $this->session->flashdata('nilai'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Lowongan Anda</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Lowongan Anda</li>
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

    <div class="col-lg-12 col-md-12">
        <table id="lowongan" class="table table-bordered table-hover js-basic-example dataTable table-custom">
            <thead>
                <tr>
                    <th style="text-align: center; font-size:20px;">Lowongan Anda</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apply as $row) { ?>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="preview col-lg-3 col-md-12">
                                    <div class="preview-pic">
                                        <div><img src="<?= base_url() ?>assets/icon/lowongan.png" class="img-fluid" /></div>
                                    </div>
                                </div>
                                <div class="details col-lg-9 col-md-12">
                                    <h3 class="product-title mb-0" style="font-weight: bold;"><?= $row->nama_lowongan ?></h3>
                                    <hr>
                                    <p class="product-description">
                                        <?php if (strlen($row->deskripsi) > 20) { ?>
                                            <?= substr($row->deskripsi, 0, 20) . " ..." ?>
                                        <?php } else { ?> <?= $row->deskripsi ?> <?php } ?>
                                    </p>
                                    <p class="price m-t-0">Salary: Rp. <span class="text-warning"><?= number_format($row->salary, 0, ',', ',') ?></span>
                                        <?php if ($row->status_hasil == 'Menunggu') { ?>
                                            <span class="badge badge-info" style="float: right;"><?= $row->status_hasil ?></span>
                                        <?php } elseif ($row->status_hasil == 'Lolos Seleksi') { ?>
                                            <span class="badge badge-success" style="float: right;"><?= $row->status_hasil ?></span>
                                        <?php } elseif ($row->status_hasil == 'Tidak Lolos Seleksi') { ?>
                                            <span class="badge badge-danger" style="float: right;"><?= $row->status_hasil ?></span>
                                        <?php } elseif ($row->status_hasil == 'Sedang Di Proses') { ?>
                                            <span class="badge badge-success" style="float: right;"><?= $row->status_hasil ?></span>
                                        <?php } elseif ($row->status_hasil == 'Diterima') { ?>
                                            <span class="badge badge-success" style="float: right;"><?= $row->status_hasil ?></span>
                                        <?php } else { ?>
                                            <span class="badge badge-danger" style="float: right;"><?= $row->status_hasil ?></span>
                                        <?php }  ?>
                                    </p>
                                    <hr>
                                    <div class="action" style="float: right;">
                                        <?php if ($row->status_hasil == 'Lolos Seleksi') { ?>
                                            <?php if ($row->hasil_test == NULL) { ?>
                                                <a href="<?= base_url() ?>User/Test/<?= $row->id_apply_job ?>"><button class="btn btn-primary" type="button">Soal Test</button></a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary"><i class="fa fa-check"></i> Soal Test (Done)</button>
                                            <?php } ?>
                                            <?php if ($row->hasil_psikotes == NULL) { ?>
                                                <a href="<?= base_url() ?>User/Psikotes/<?= $row->id_apply_job ?>"><button class="btn btn-default" type="button">Soal Psikotes</button></a>
                                            <?php } else { ?>
                                                <button class="btn btn-default"><i class="fa fa-check"></i> Soal Psikotes (Done)</button>
                                            <?php } ?>
                                        <?php }  ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

<!-- SWEETALERT -->
<script src="<?= base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->

<script src="<?= base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script>
    $('#lowongan').DataTable()
    const swalnilai = $('.flash-data-nilai').data('flashdata');

    if (swalnilai) {
        swal({
            title: 'Success!',
            text: swalnilai,
            type: 'success',
            showConfirmButton: true,
            // timer: 3000
        })
    }
</script>