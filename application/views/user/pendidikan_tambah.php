<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Tambah Data Pendidikan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User/Pendidikan">Data Pendidikan</a></li>
                <li class="breadcrumb-item active">Tambah Data Pendidikan</li>
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
                <h2>Tambah Data Pendidikan</h2>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>User/tambahDataPendidikan" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Data Pendidikan Terakhir 1</th>
                                <th><button class="btn btn-success" type="button" id="addData" style="float: right;"><i class="fa fa-plus"> Tambah Data Pendidikan</i></button></th>
                            </tr>
                        </thead>
                        <tbody id="loop">
                            <tr>
                                <td colspan="2">
                                    <div class="row" style="margin-left: 3px;">
                                        <label for="">Pendidikan Terakhir <span style="color: red;">*</span></label>
                                        <select name="pendidikan_terakhir[]" id="pendidikan_terakhir" style="width: 98%;" class="form-control">
                                            <option value=""></option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                            <option value="D3">D3</option>
                                            <option value="Strata Satu (S1)">Strata Satu (S1)</option>
                                            <option value="Strata Dua (S2)">Strata Dua (S2)</option>
                                        </select>
                                    </div>

                                    <div class="form-group" style="margin-top: 10px;">
                                        <label for="">Nama Sekolah/Perguruan Tinggi/Univeristas <span style="color: red;">*</span></label>
                                        <input type="text" name="nama_sekolah[]" placeholder="Nama Sekolah/Perguruan Tinggi/Univeristas" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <input type="text" name="jurusan[]" placeholder="Jurusan" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nilai Rata-Rata/IPK/GPA <span style="color: red;">*</span></label>
                                        <input type="text" name="nilai_pend[]" placeholder="Nilai Rata-Rata/IPK/GPA" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Kota <span style="color: red;">*</span></label>
                                        <input type="text" name="kota[]" placeholder="Kota Sekolah/Perguruan Tinggi/Univeristas" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tahun Masuk <span style="color: red;">*</span></label>
                                        <input type="month" name="start_year[]" placeholder="Tahun Masuk *" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tahun Lulus <span style="color: red;">*</span></label>
                                        <input type="month" name="end_year[]" placeholder="Tahun Lulus *" class="form-control" required>
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

<script>
    $(document).ready(function() {
        $('#pendidikan_terakhir').select2({
            placeholder: 'Pendidikan Terakhir *'
        });
        var no = 2
        $('thead').on('click', '#addData', function() {
            var tr = ` <tr>
                        <td colspan="2"><div style="font-weight: bold;">Data Pendidikan Terakhir ${no} 
                        <button class="btn btn-danger" id="deleteRow" style="float: right;"><i class="fa fa-trash"></i></button></div>
                            
                            <hr style="border-block-width: 3px;border-block-color: #59c4bc;">
                            <div class="row" style="margin-left: 3px;">
                                <label for="">Pendidikan Terakhir <span style="color: red;">*</span></label>
                                <select name="pendidikan_terakhir[]" id="pendidikan_terakhir${no}" style="width: 98%;" class="form-control">
                                    <option value=""></option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option value="D3">D3</option>
                                    <option value="Strata Satu (S1)">Strata Satu (S1)</option>
                                    <option value="Strata Dua (S2)">Strata Dua (S2)</option>
                                </select>
                            </div>

                            <div class="form-group" style="margin-top: 10px;">
                                <label for="">Nama Sekolah/Perguruan Tinggi/Univeristas <span style="color: red;">*</span></label>
                                <input type="text" name="nama_sekolah[]" placeholder="Nama Sekolah/Perguruan Tinggi/Univeristas" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Jurusan <span style="color: red;">*</span></label>
                                <input type="text" name="jurusan[]" placeholder="Jurusan *" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Nilai Rata-Rata/IPK/GPA <span style="color: red;">*</span></label>
                                <input type="text" name="nilai_pend[]" placeholder="Nilai Rata-Rata/IPK/GPA" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Kota <span style="color: red;">*</span></label>
                                <input type="text" name="kota[]" placeholder="Kota Sekolah/Perguruan Tinggi/Univeristas" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Tahun Masuk <span style="color: red;">*</span></label>
                                <input type="month" name="start_year[]" placeholder="Tahun Masuk *" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Tahun Lulus <span style="color: red;">*</span></label>
                                <input type="month" name="end_year[]" placeholder="Tahun Lulus *" class="form-control" required>
                            </div>
                        </td>
                    </tr>`
            $('#loop').append(tr).html();
            $('#pendidikan_terakhir' + no).select2({
                placeholder: 'Pendidikan Terakhir *'
            });
            no++;

        });
        $('#loop').on('click', '#deleteRow', function() {
            $(this).parent().parent().remove();
        });
    });
</script>