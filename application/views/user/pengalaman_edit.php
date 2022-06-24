<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Edit Data Pengalaman</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User/Pengalaman">Data Pengalaman</a></li>
                <li class="breadcrumb-item active">Edit Data Pengalaman</li>
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
                <h2>Edit Data Pengalaman</h2>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>User/editDataPengalaman" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Data Pengalaman Terakhir</th>
                            </tr>
                        </thead>
                        <tbody id="loop">
                            <tr>
                                <td colspan="2">
                                    <div class="row" style="margin-left: 3px;">
                                        <label for="">Nama Perusahaan Sebelumnya <span style="color: red;">*</span></label>
                                        <input type="hidden" name="id" value="<?= $pengalaman['id_pengalaman'] ?>">
                                        <input type="text" name="perusahaan" placeholder="Nama Perusahaan Sebelumnya" class="form-control" value="<?= $pengalaman['perusahaan'] ?>" required>
                                    </div>

                                    <div class="form-group" style="margin-top: 10px;">
                                        <label for="">Posisi Pengalaman Kerja Terakhir <span style="color: red;">*</span></label>
                                        <input type="text" name="posisi_terakhir" placeholder="Posisi Pengalaman Kerja Terakhir" class="form-control" value="<?= $pengalaman['posisi_terakhir'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Posisi Jabatan Terakhir <span style="color: red;">*</span></label>
                                        <input type="text" name="jabatan_terakhir" placeholder="Posisi Jabatan Terakhir" class="form-control" value="<?= $pengalaman['jabatan_terakhir'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mulai Bekerja di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                        <input type="month" name="mulai_bekerja" placeholder="Mulai Bekerja di perusahaan sebelumnya" value="<?= $pengalaman['mulai_bekerja'] ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Berakhir Bekerja di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                        <input type="month" name="berakhir_bekerja" placeholder="Berakhir Bekerja di perusahaan sebelumnya" value="<?= $pengalaman['berakhir_bekerja'] ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Penghasilan Pokok Terakhir (Gaji Perbulan) <span style="color: red;">*</span></label>
                                        <input type="text" name="gaji_pokok" id="gaji_pokok" placeholder="Penghasilan Pokok Terakhir (Gaji Perbulan)" value="<?= $pengalaman['gaji_pokok'] ?>" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Penghasilan Tambahan Terakhir (Insentif Perbulan) <span style="color: red;">*</span></label>
                                        <input type="text" name="gaji_insentif" id="gaji_insentif" placeholder="Penghasilan Tambahan Terakhir (Insentif Perbulan)" value="<?= $pengalaman['gaji_insentif'] ?>" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Fasilitas Terakhir yang didapatkan di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                        <textarea name="fasilitas_terakhir" class="form-control"><?= $pengalaman['fasilitas_terakhir'] ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Alasan Berhenti dari pekerjaan sebelumnya <span style="color: red;">*</span></label>
                                        <textarea name="alasan" class="form-control"><?= $pengalaman['alasan'] ?></textarea>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Update</i></button>
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

        $("#gaji_pokok").maskMoney({
            allowNegative: true,
            thousands: ',',
            decimal: '.',
            affixesStay: false,
            precision: 0
        });
        $('#gaji_pokok').maskMoney('mask');

        $("#gaji_insentif").maskMoney({
            allowNegative: true,
            thousands: ',',
            decimal: '.',
            affixesStay: false,
            precision: 0
        });
        $('#gaji_insentif').maskMoney('mask');
    });
</script>