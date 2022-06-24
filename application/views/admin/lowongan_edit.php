<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Edit Lowongan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin/Data_Lowongan">Data Lowongan</a></li>
                <li class="breadcrumb-item active">Edit Lowongan</li>
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
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Edit Data Lowongan</h2>
                <hr>
            </div>
            <div class="body">
                <form id="basic-form" method="post" action="<?= base_url() ?>Admin/editLowongan" novalidate>
                    <div class="form-group">
                        <label>Nama Lowongan</label>
                        <input type="hidden" name="id" value="<?= $lowongan['id_lowongan'] ?>">
                        <input type="text" name="nama_lowongan" value="<?= $lowongan['nama_lowongan'] ?>" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Departement</label>
                                <select name="id_departement" id="id_departement" class="form-control" style="width: 100%;" required>
                                    <option value=""></option>
                                    <?php foreach ($departement as $row) { ?>
                                        <option value="<?= $row->id_departement ?>" <?= $row->id_departement == $lowongan['id_departement'] ? 'selected' : '' ?>><?= $row->nama_departement ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="id_jabatan" id="id_jabatan" class="form-control" style="width: 100%;" required>
                                    <option value=""></option>
                                    <?php foreach ($jabatan as $raw) { ?>
                                        <option value="<?= $raw->id_jabatan ?>" <?= $raw->id_jabatan == $lowongan['id_jabatan'] ? 'selected' : '' ?>><?= $raw->nama_jabatan ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Maksimal Usia</label>
                        <input type="number" name="max_usia" value="<?= $lowongan['max_usia'] ?>" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Minimal Jenjang Pendidikan</label>
                                <select name="min_pend" id="min_pend" class="form-control" style="width: 100%;" required>
                                    <option value=""></option>
                                    <option value="SD" <?= $lowongan['min_pend'] == 'SD' ? 'selected' : '' ?>>SD</option>
                                    <option value="SMA" <?= $lowongan['min_pend'] == 'SMA' ? 'selected' : '' ?>>SMA</option>
                                    <option value="D1" <?= $lowongan['min_pend'] == 'D1' ? 'selected' : '' ?>>D1</option>
                                    <option value="D2" <?= $lowongan['min_pend'] == 'D2' ? 'selected' : '' ?>>D2</option>
                                    <option value="D3" <?= $lowongan['min_pend'] == 'D3' ? 'selected' : '' ?>>D3</option>
                                    <option value="D4/S1" <?= $lowongan['min_pend'] == 'D4/S1' ? 'selected' : '' ?>>D4/S1</option>
                                    <option value="S2" <?= $lowongan['min_pend'] == 'S2' ? 'selected' : '' ?>>S2</option>
                                    <option value="S3" <?= $lowongan['min_pend'] == 'S3' ? 'selected' : '' ?>>S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Jurusan Pendidikan Yang Dibutuhkan</label>
                                <input type="text" name="jurusan_pend" value="<?= $lowongan['jurusan_pend'] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Salary Yang Ditawarkan</label>
                        <input type="text" name="salary" id="salary" value="<?= $lowongan['salary'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Close</label>
                        <input type="date" name="tgl_close" value="<?= date('d/m/Y', strtotime($lowongan['tgl_close'])) ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="5" cols="30" required><?= $lowongan['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kriteria</label>
                        <input type="text" name="kriteria" class="form-control" value="<?= $lowongan['kriteria'] ?>" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url() ?>Admin/Data_Lowongan"><button type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>


<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- MASK MONEY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.maskMoney.js"></script>

<!-- VALIDATION -->
<script src="<?= base_url() ?>assets/vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?= base_url() ?>assets/vendor/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->


<!-- page js file -->
<script src="<?= base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/pages/forms/form-wizard.js"></script>

<script>
    $(document).ready(function() {
        $('#id_departement').select2({
            placeholder: 'Select a Role'
        });
        $('#id_jabatan').select2({
            placeholder: 'Select a Role'
        });
        $('#min_pend').select2({
            placeholder: 'Select a Role'
        });
        $("#salary").maskMoney({
            allowNegative: true,
            thousands: ',',
            decimal: '.',
            affixesStay: false,
            precision: 0
        });
        $('#salary').maskMoney('mask');
    });
</script>