<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Details Soal</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin/Data_Lowongan">Data Lowongan</a></li>
                <li class="breadcrumb-item active">Details Soal</li>
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
                <h4 style="text-align:center">Details Lowongan</h4>
                <hr>
            </div>
            <div class="body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                Nama Lowongan
                            </td>
                            <td>: <?= $lowongan['nama_lowongan'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Nama Departement
                            </td>
                            <td>: <?= $lowongan['nama_departement'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Nama Jabatan
                            </td>
                            <td>: <?= $lowongan['nama_jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Max Usia
                            </td>
                            <td>: <?= $lowongan['max_usia'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Minimal Pendidikan
                            </td>
                            <td>: <?= $lowongan['min_pend'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Jurusan Pendidikan
                            </td>
                            <td>: <?= $lowongan['jurusan_pend'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Salary
                            </td>
                            <td>: Rp. <?= $lowongan['salary'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Deskripsi
                            </td>
                            <td>: <?= $lowongan['deskripsi'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Kriteria
                            </td>
                            <td>: <?= $lowongan['kriteria'] ?></td>
                        </tr>
                        <tr>
                            <td>
                                Tanggal Close
                            </td>
                            <td>: <?= date('d-m-Y', strtotime($lowongan['tgl_close'])) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 style="text-align:center">Details Soal</h4>
                <hr>
                <p>Anda dapat menambah, mengedit, atau menghapus soal <span style="color:red;">*</span> </p>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>Admin/tambahEditSoal" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style=" text-align: center;">SOAL TEST</th>
                                <th style=" text-align: center;"><button id="addRow" class="btn btn-sm btn-primary"><i class="fa fa-plus-square"></i> Tambah Soal</button></th>
                            </tr>

                        </thead>
                        <tbody id="loop">
                            <?php $no = 1;
                            foreach ($soal as $row) { ?>
                                <tr>
                                    <td style='text-align: center; padding-top:0px; margin-top:0px;'><?= $no++ ?></td>
                                    <td><label>Pertanyaan :</label>
                                        <label><?= $row->pertanyaan ?></label>

                                        <div class="row" style="margin-top:10px">
                                            <div class="col-2">
                                                <label>A. </label>
                                            </div>
                                            <div class="col-10">
                                                <label> <?= $row->option_a ?></label>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top:10px">
                                            <div class="col-2">
                                                <label>B. </label>
                                            </div>
                                            <div class="col-10">
                                                <label for=""><?= $row->option_b ?></label>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top:10px">
                                            <div class="col-2">
                                                <label>C. </label>
                                            </div>
                                            <div class="col-10">
                                                <label for=""><?= $row->option_c ?></label>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top:10px">
                                            <div class="col-2">
                                                <label>D. </label>
                                            </div>
                                            <div class="col-10">
                                                <label for=""> <?= $row->option_d ?></label>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:10px">
                                            <div class="col-3">
                                                <label>Kunci Jawaban: </label>
                                            </div>
                                            <div class="col-9">
                                                <label for=""><?= $row->kunjaw ?></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td style=" text-align: center;">
                                        <a data-toggle="modal" data-target="#edit<?= $row->id_soal ?>"> <button class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button></a>
                                        <a data-toggle="modal" data-target="#delete<?= $row->id_soal ?>"> <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-2">
                            <a href="<?= base_url() ?>Admin/Data_Lowongan"><button type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> Back</i></button></a>

                        </div>
                        <div class="col-10">
                            <button id="save" type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL -->
<?php foreach ($soal as $row) { ?>
    <div class="modal fade" id="edit<?= $row->id_soal ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Edit Soal</h4>
                </div>
                <form action="<?= base_url() ?>Admin/editSoal" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Pertanyaan</label>
                            <input type="hidden" name="id_soal" value="<?= $row->id_soal ?>">
                            <input type="hidden" name="id" value="<?= $row->id_lowongan ?>">
                            <input type="text" name="pertanyaan" value="<?= $row->pertanyaan ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Option A</label>
                            <input type="text" name="option_a" value="<?= $row->option_a ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Option B</label>
                            <input type="text" name="option_b" value="<?= $row->option_b ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Option C</label>
                            <input type="text" name="option_c" value="<?= $row->option_c ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Option D</label>
                            <input type="text" name="option_d" value="<?= $row->option_d ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kunci Jawaban</label>
                            <input type="text" name="kunjaw" class="form-control" value="<?= $row->kunjaw ?>" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<?php foreach ($soal as $row) { ?>
    <div class="modal fade" id="delete<?= $row->id_soal ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Delete Soal!</h4>
                </div>
                <form action="<?= base_url() ?>Admin/deleteSoal" method="POST">
                    <div class="modal-body">
                        <i class="fa fa-trash" style="color: red;"></i>
                        <label class="control-label">Anda Yakin Ingin Menghapus Data?</label>
                        <input type="hidden" name="id" value="<?= $row->id_lowongan ?>" />
                        <input type="hidden" name="id_soal" value="<?= $row->id_soal ?>" />
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes, Delete It!</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

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
        var save = document.getElementById("save");
        save.style.display = "none"
        var no = 2;
        $('thead').on('click', '#addRow', function() {
            save.style.display = "block"
            var tr = `<tr id='pertanyaan1'>
                        <td style='text-align: center; padding-top:0px; margin-top:0px;'>No.</td>
                        <td><label>Pertanyaan :</label>
                            <input type='text' name='pertanyaan[]' id='pertanyaan' class='form-control' required>
                            <input type='hidden' name='id' value='<?= $lowongan['id_lowongan'] ?>'>

                            
                            <div class='row' style='margin-top:10px;'>
                                <div class='col-2'>
                                    <label>A. </label>
                                </div>
                                <div class='col-10'>
                                    <input type='text' name='option_a[]' class='form-control' required>
                                </div>
                            </div>
                            
                            <div class='row' style='margin-top:10px;'>
                                <div class='col-2'>
                                    <label>B. </label>
                                </div>
                                <div class='col-10'>
                                    <input type='text' name='option_b[]' class='form-control' required>
                                </div>
                            </div>

                            
                            <div class='row' style='margin-top:10px;'>
                                <div class='col-2'>
                                    <label>C. </label>
                                </div>
                                <div class='col-10'>
                                    <input type='text' name='option_c[]' class='form-control' required>
                                </div>
                            </div>

                            
                            <div class='row' style='margin-top:10px;'>
                                <div class='col-2'>
                                    <label>D. </label>
                                </div>
                                <div class='col-10'>
                                    <input type='text' name='option_d[]' class='form-control' required>
                                </div>
                            </div>

                            <div class='row' style='margin-top:10px'>
                                <div class='col-3'>
                                    <label>Kunci Jawaban </label>
                                </div>
                                <div class='col-9'>
                                    <input type='text' name='kunjaw[]' class='form-control' required>
                                </div>
                            </div>
                        </td>
                        <td style=' text-align: center;'>
                            <button id='deleteRow' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
                        </td>
                    </tr>`
            $('#loop').append(tr).html();
            no++;
        });
        $('#loop').on('click', '#deleteRow', function() {
            $(this).parent().parent().remove();
        });
    });
</script>