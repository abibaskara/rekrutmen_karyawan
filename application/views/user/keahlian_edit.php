<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Edit Data Keahlian</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User/Keahlian">Data Keahlian</a></li>
                <li class="breadcrumb-item active">Edit Data Keahlian</li>
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
                <h2>Edit Data Keahlian</h2>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>User/editDataKeahlian" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Data Keahlian</th>
                            </tr>
                        </thead>
                        <tbody id="loop">
                            <tr>
                                <td colspan="2">
                                    <div class="row" style="margin-left: 3px;">
                                        <label for="">Keahlian <span style="color: red;">*</span></label>
                                        <input type="hidden" name="id" value="<?= $keahlian['id_keahlian'] ?>">
                                        <input type="text" name="keterampilan" placeholder="Keahlian" class="form-control" value="<?= $keahlian['keterampilan'] ?>">
                                    </div>

                                    <div class="row" style="margin-left: 3px; margin-top: 10px;">
                                        <label for="">Tingkat Keahlian <span style="color: red;">*</span></label>
                                        <select name="tingkat_keahlian_keterampilan" id="tingkat_keahlian_keterampilan" class="form-control" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="Sedang" <?= $keahlian['tingkat_keahlian_keterampilan'] == 'Sedang' ? 'selected' : '' ?>>Sedang</option>
                                            <option value="Baik" <?= $keahlian['tingkat_keahlian_keterampilan'] == 'Baik' ? 'selected' : '' ?>>Baik</option>
                                            <option value="Sangat Baik" <?= $keahlian['tingkat_keahlian_keterampilan'] == 'Sangat Baik' ? 'selected' : '' ?>>Sangat Baik</option>
                                            <option value="Ahli" <?= $keahlian['tingkat_keahlian_keterampilan'] == 'Ahli' ? 'selected' : '' ?>>Ahli</option>
                                        </select>
                                    </div>

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

<script>
    $(document).ready(function() {

        $('#tingkat_keahlian_keterampilan').select2({
            placeholder: 'Select a Tingkat Keahlian Keterampilan *'
        });

    });
</script>