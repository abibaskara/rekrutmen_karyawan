<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Cari Lowongan Kerja</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Cari Lowongan Kerja</li>
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
        <table id="lowongan" class="table table-bordered table-hover js-basic-example dataTable table-custom">
            <thead>
                <tr>
                    <th style="text-align: center; font-size:20px;">Lowongan Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lowongan as $row) { ?>
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
                                    <h5 class="sizes">Departement:
                                        <span class="size" title="small"><?= $row->nama_departement ?></span>
                                    </h5>
                                    <p class="price m-t-0">Salary: Rp. <span class="text-warning"><?= number_format($row->salary, 0, ',', ',') ?></span></p>
                                    <hr>
                                    <div class="action" style="float: right;">
                                        <a href="<?= base_url() ?>User/Apply/<?= $row->id_lowongan ?>"><button class="btn btn-primary" type="button">Apply</button></a>
                                        <a href="<?= base_url() ?>User/Detail_Lowongan/<?= $row->id_lowongan ?>"><button class="btn btn-default" type="button">Read More..</button></a>
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

<script src="<?= base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script>
    $('#lowongan').DataTable()
</script>