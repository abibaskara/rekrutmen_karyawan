<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Tambah Soal</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin/Data_Lowongan">Data Lowongan</a></li>
                <li class="breadcrumb-item active">Tambah Soal</li>
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
                <h2>Tambah Data Soal</h2>
                <hr>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>Admin/tambahSoal" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">SOAL TEST</th>
                                <th style=" text-align: center;"><button id="addRow" class="btn btn-sm btn-primary"><i class="fa fa-plus-square"></i></button></th>
                            </tr>

                        </thead>
                        <tbody id="loop">
                            <tr>
                                <td style='text-align: center; padding-top:0px; margin-top:0px;'>1</td>
                                <td><label>Pertanyaan :</label>
                                    <input type="text" name="pertanyaan[]" id="pertanyaan" class="form-control" required>
                                    <input type="hidden" name="id" value="<?= $lowongan['id_lowongan'] ?>">

                                    <div class="row" style="margin-top:10px">
                                        <div class="col-2">
                                            <label>A. </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" name="option_a[]" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:10px">
                                        <div class="col-2">
                                            <label>B. </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" name="option_b[]" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:10px">
                                        <div class="col-2">
                                            <label>C. </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" name="option_c[]" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:10px">
                                        <div class="col-2">
                                            <label>D. </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" name="option_d[]" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:10px">
                                        <div class="col-2">
                                            <label>Kunci Jawaban </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" name="kunjaw[]" class="form-control" required>
                                        </div>
                                    </div>
                                </td>
                                <td style=" text-align: center;">
                                    <button id="deleteRow" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>
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
        var no = 2;
        $('thead').on('click', '#addRow', function() {
            var tr = `<tr id='pertanyaan1'>
                        <td style='text-align: center; padding-top:0px; margin-top:0px;'>${no}</td>
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
                                <div class='col-2'>
                                    <label>Kunci Jawaban </label>
                                </div>
                                <div class='col-10'>
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