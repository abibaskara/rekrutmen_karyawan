<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Edit Data Pendidikan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User/Pendidikan">Data Pendidikan</a></li>
                <li class="breadcrumb-item active">Edit Data Pendidikan</li>
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
                <h2>Edit Data Pendidikan</h2>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>User/editDataPendidikan" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Data Pendidikan Terakhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <div class="row" style="margin-left: 3px;">
                                        <label for="">Pendidikan Terakhir <span style="color: red;">*</span></label>
                                        <select name="pendidikan_terakhir" id="pendidikan_terakhir" style="width: 98%;" class="form-control">
                                            <option value=""></option>
                                            <option value="SMP" <?= $pendidikan['pendidikan_terakhir'] == 'SMP' ? 'selected' : '' ?>>SMP</option>
                                            <option value="SMA/SMK Sederajat" <?= $pendidikan['pendidikan_terakhir'] == 'SMA/SMK Sederajat' ? 'selected' : '' ?>>SMA/SMK Sederajat</option>
                                            <option value="D3" <?= $pendidikan['pendidikan_terakhir'] == 'D3' ? 'selected' : '' ?>>D3</option>
                                            <option value="Strata Satu (S1)" <?= $pendidikan['pendidikan_terakhir'] == 'Strata Satu (S1)' ? 'selected' : '' ?>>Strata Satu (S1)</option>
                                            <option value="Strata Dua (S2)" <?= $pendidikan['pendidikan_terakhir'] == 'Strata Dua (S2)' ? 'selected' : '' ?>>Strata Dua (S2)</option>
                                        </select>
                                    </div>

                                    <div class="form-group" style="margin-top: 10px;">
                                        <label for="">Nama Sekolah/Perguruan Tinggi/Univeristas <span style="color: red;">*</span></label>
                                        <input type="hidden" name="id" value="<?= $pendidikan['id_pendidikan'] ?>">
                                        <input type="text" name="nama_sekolah" placeholder="Nama Sekolah/Perguruan Tinggi/Univeristas" class="form-control" value="<?= $pendidikan['nama_sekolah'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <input type="text" name="jurusan" placeholder="Jurusan" class="form-control" value="<?= $pendidikan['jurusan'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nilai Rata-Rata/IPK/GPA <span style="color: red;">*</span></label>
                                        <input type="text" name="nilai_pend" placeholder="Nilai Rata-Rata/IPK/GPA" class="form-control" value="<?= $pendidikan['nilai_pend'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Kota <span style="color: red;">*</span></label>
                                        <input type="text" name="kota" placeholder="Kota Sekolah/Perguruan Tinggi/Univeristas" class="form-control" value="<?= $pendidikan['kota'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tahun Masuk <span style="color: red;">*</span></label>
                                        <input type="month" name="start_year" placeholder="Tahun Masuk *" class="form-control" value="<?= $pendidikan['start_year'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tahun Lulus <span style="color: red;">*</span></label>
                                        <input type="month" name="end_year" placeholder="Tahun Lulus *" class="form-control" value="<?= $pendidikan['end_year'] ?>" required>
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
    });
</script>