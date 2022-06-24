<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Tambah Data Pengalaman</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User/Pengalaman">Data Pengalaman</a></li>
                <li class="breadcrumb-item active">Tambah Data Pengalaman</li>
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
                <h2>Tambah Data Pengalaman</h2>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>User/tambahDataPengalaman" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Data Pengalaman Terakhir 1</th>
                                <th><button class="btn btn-success" type="button" id="addData" style="float: right;"><i class="fa fa-plus"> Tambah Data Pengalaman</i></button></th>
                            </tr>
                        </thead>
                        <tbody id="loop">
                            <tr>
                                <td colspan="2">
                                    <div class="row" style="margin-left: 3px;">
                                        <label for="">Nama Perusahaan Sebelumnya <span style="color: red;">*</span></label>
                                        <input type="text" name="perusahaan[]" placeholder="Nama Perusahaan Sebelumnya" class="form-control" required>
                                    </div>

                                    <div class="form-group" style="margin-top: 10px;">
                                        <label for="">Posisi Pengalaman Kerja Terakhir <span style="color: red;">*</span></label>
                                        <input type="text" name="posisi_terakhir[]" placeholder="Posisi Pengalaman Kerja Terakhir" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Posisi Jabatan Terakhir <span style="color: red;">*</span></label>
                                        <input type="text" name="jabatan_terakhir[]" placeholder="Posisi Jabatan Terakhir" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mulai Bekerja di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                        <input type="month" name="mulai_bekerja[]" placeholder="Mulai Bekerja di perusahaan sebelumnya" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Berakhir Bekerja di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                        <input type="month" name="berakhir_bekerja[]" placeholder="Berakhir Bekerja di perusahaan sebelumnya" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Penghasilan Pokok Terakhir (Gaji Perbulan) <span style="color: red;">*</span></label>
                                        <input type="text" name="gaji_pokok[]" id="gaji_pokok" placeholder="Penghasilan Pokok Terakhir (Gaji Perbulan)" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Penghasilan Tambahan Terakhir (Insentif Perbulan) <span style="color: red;">*</span></label>
                                        <input type="text" name="gaji_insentif[]" id="gaji_insentif" placeholder="Penghasilan Tambahan Terakhir (Insentif Perbulan)" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Fasilitas Terakhir yang didapatkan di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                        <textarea name="fasilitas_terakhir[]" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Alasan Berhenti dari pekerjaan sebelumnya <span style="color: red;">*</span></label>
                                        <textarea name="alasan[]" class="form-control"></textarea>
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

        var no = 2
        $('thead').on('click', '#addData', function() {
            var tr = ` <tr>
                        <td colspan="2"><div style="font-weight: bold;">Data Pengalaman Terakhir ${no} 
                        <button class="btn btn-danger" id="deleteRow" style="float: right;"><i class="fa fa-trash"></i></button></div>
                            
                            <hr style="border-block-width: 3px;border-block-color: #59c4bc;">
                            <div class="row" style="margin-left: 3px;">
                                <label for="">Nama Perusahaan Sebelumnya <span style="color: red;">*</span></label>
                                <input type="text" name="perusahaan[]" placeholder="Nama Perusahaan Sebelumnya" class="form-control" required>
                            </div>

                            <div class="form-group" style="margin-top: 10px;">
                                <label for="">Posisi Pengalaman Kerja Terakhir <span style="color: red;">*</span></label>
                                <input type="text" name="posisi_terakhir[]" placeholder="Posisi Pengalaman Kerja Terakhir" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Posisi Jabatan Terakhir <span style="color: red;">*</span></label>
                                <input type="text" name="jabatan_terakhir[]" placeholder="Posisi Jabatan Terakhir" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Mulai Bekerja di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                <input type="month" name="mulai_bekerja[]" placeholder="Mulai Bekerja di perusahaan sebelumnya" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Berakhir Bekerja di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                <input type="month" name="berakhir_bekerja[]" placeholder="Berakhir Bekerja di perusahaan sebelumnya" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Penghasilan Pokok Terakhir (Gaji Perbulan) <span style="color: red;">*</span></label>
                                <input type="text" name="gaji_pokok[]" id="gaji_pokok${no}" placeholder="Penghasilan Pokok Terakhir (Gaji Perbulan)" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Penghasilan Tambahan Terakhir (Insentif Perbulan) <span style="color: red;">*</span></label>
                                <input type="text" name="gaji_insentif[]" id="gaji_insentif${no}" placeholder="Penghasilan Tambahan Terakhir (Insentif Perbulan)" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Fasilitas Terakhir yang didapatkan di perusahaan sebelumnya <span style="color: red;">*</span></label>
                                <textarea name="fasilitas_terakhir[]" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Alasan Berhenti dari pekerjaan sebelumnya <span style="color: red;">*</span></label>
                                <textarea name="alasan[]" class="form-control"></textarea>
                            </div>
                        </td>
                    </tr>`
            $('#loop').append(tr).html();
            $("#gaji_pokok" + no).maskMoney({
                allowNegative: true,
                thousands: ',',
                decimal: '.',
                affixesStay: false,
                precision: 0
            });
            $('#gaji_pokok' + no).maskMoney('mask');

            $("#gaji_insentif" + no).maskMoney({
                allowNegative: true,
                thousands: ',',
                decimal: '.',
                affixesStay: false,
                precision: 0
            });
            $('#gaji_insentif' + no).maskMoney('mask');
            no++;

        });
        $('#loop').on('click', '#deleteRow', function() {
            $(this).parent().parent().remove();
        });
    });
</script>