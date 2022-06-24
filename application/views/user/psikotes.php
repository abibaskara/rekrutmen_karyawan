<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Soal Test</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User/Lowongan_Anda">Lowongan Anda</a></li>
                <li class="breadcrumb-item active">Soal Test</li>
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
                <h2>Soal Psikotes</h2>
                <p>Pastikan anda mengisi dengan sungguh-sungguh <span style="color: red;">*</span></p>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>User/jawabanPsikotes" method="POST">
                    <input type="hidden" name="id" value="<?= $apply['id_apply_job'] ?>">
                    <table class="table">
                        <tbody>
                            <?php $no = 1;
                            $id = 1;
                            foreach ($psikotes as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?>. <?= $row->pertanyaan_psikotes ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name="total[]" value="a">
                                        <input type="hidden" name="id_psikotes<?= $id ?>" value="<?= $row->id_psikotes ?>">
                                        <label class="fancy-radio"><input name="jawaban<?= $id ?>" value="A" type="radio"><span><i></i>A. <?= $row->option_a_psikotes ?></span></label><br>
                                        <label class="fancy-radio"><input name="jawaban<?= $id ?>" value="B" type="radio"><span><i></i>B. <?= $row->option_b_psikotes ?></span></label><br>
                                        <label class="fancy-radio"><input name="jawaban<?= $id ?>" value="C" type="radio"><span><i></i>C. <?= $row->option_c_psikotes ?></span></label><br>
                                        <label class="fancy-radio"><input name="jawaban<?= $id ?>" value="D" type="radio"><span><i></i>D. <?= $row->option_d_psikotes ?></span></label>
                                    </td>
                                </tr>
                            <?php $id++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>