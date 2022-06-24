<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Personal Data</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Personal Data</li>
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
    <div class="col-lg-12">
        <div class="card">
            <form action="<?= base_url() ?>User/updateDataPelamar" method="POST" enctype="multipart/form-data">
                <div class="body">
                    <h6>Profile Photo</h6>
                    <div class="media">
                        <div class="media-left m-r-15" style="width: 15%;">
                            <img src="<?= base_url() ?>assets/data_pelamar/<?= $personal_data['foto_pelamar'] ?>" class="user-photo media-object" width="70%" alt="User">
                        </div>
                        <div class="media-body">
                            <p>Update your photo.
                                <!-- <br> <em>Image should be at least 140px x 140px</em> -->
                            </p>
                            <button type="button" class="btn btn-default" id="btn-upload-photo">Upload Photo</button>
                            <input type="file" id="filePhoto" name="foto_pelamar" accept=".jpg, .png, .jpeg" class="sr-only">
                        </div>
                    </div>
                </div>

                <div class="body">
                    <h6 style="font-weight: bold;">Basic Information</h6>
                    <hr>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">No KTP</label>
                                <input type="hidden" name="id" value="<?= $personal_data['id_pelamar'] ?>">
                                <input type="hidden" name="old_foto_pelamar" value="<?= $personal_data['foto_pelamar'] ?>">
                                <input type="hidden" name="old_cv" value="<?= $personal_data['cv'] ?>">
                                <input type="text" class="form-control" placeholder="No KTP *" id="no_ktp" value="<?= $personal_data['no_ktp'] ?>" name="no_ktp" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap *" id="nama_lengkap" name="nama_lengkap" value="<?= $personal_data['nama_pelamar'] ?>" required>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" placeholder="Email *" name="email" value="<?= $personal_data['email'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Tempat Lahir *" name="tempat_lahir" value="<?= $personal_data['tempat_lahir'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" placeholder="Tempat Lahir *" name="tgl_lahir" value="<?= $personal_data['tgl_lahir'] ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-control" required>
                                    <option value=""></option>
                                    <option value="Laki-Laki" <?= $personal_data['jk'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?= $personal_data['jk'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select name="agama" id="agama" class="form-control" required style="width: 100%;">
                                    <option value=""></option>
                                    <option value="Islam" <?= $personal_data['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                    <option value="Khatolik" <?= $personal_data['agama'] == 'Khatolik' ? 'selected' : '' ?>>Khatolik</option>
                                    <option value="Protestan" <?= $personal_data['agama'] == 'Protestan' ? 'selected' : '' ?>>Protestan</option>
                                    <option value="Buddha" <?= $personal_data['agama'] == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
                                    <option value="Hindu" <?= $personal_data['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                    <option value="Khonghucu" <?= $personal_data['agama'] == 'Khonghucu' ? 'selected' : '' ?>>Khonghucu</option>
                                    <option value="Keyakinan Tertentu" <?= $personal_data['agama'] == 'Keyakinan Tertentu' ? 'selected' : '' ?>>Keyakinan Tertentu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status Perkawinan</label>
                                <select name="status_kawin" id="status_kawin" class="form-control" required>
                                    <option value=""></option>
                                    <option value="Lajang" <?= $personal_data['status_kawin'] == 'Lajang' ? 'selected' : '' ?>>Lajang</option>
                                    <option value="Menikah" <?= $personal_data['status_kawin'] == 'Menikah' ? 'selected' : '' ?>>Menikah</option>
                                    <option value="Janda" <?= $personal_data['status_kawin'] == 'Janda' ? 'selected' : '' ?>>Janda</option>
                                    <option value="Duda" <?= $personal_data['status_kawin'] == 'Duda' ? 'selected' : '' ?>>Duda</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">CV</label>
                                <div class="row">
                                    <a href="<?= base_url() ?>assets/data_pelamar/<?= $personal_data['cv'] ?>" target="_blank"><button type="button" class="btn btn-primary" style="margin-left: 15px;">Lihat CV</button></a>
                                    <button type="button" class="btn btn-secondary" style="margin-left: 15px;" id="btn-upload-cv">Update CV</button>
                                    <input type="file" id="fileCv" name="cv" class="sr-only" accept=".doc, .docx, .pdf">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="body">
                    <h6 style="font-weight: bold;">General Information</h6>
                    <hr>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email *" name="email" required value="<?= $personal_data['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Kewarganegaraan</label>
                                <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                                    <option value=""></option>
                                    <option value="WNI" <?= $personal_data['kewarganegaraan'] == 'WNI' ? 'selected' : '' ?>>WNI</option>
                                    <option value="WNA" <?= $personal_data['kewarganegaraan'] == 'WNA' ? 'selected' : '' ?>>WNA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">SIM yang dimiliki</label>
                                <select name="sim" id="sim" class="form-control" required>
                                    <option value=""></option>
                                    <option value="SIM A" <?= $personal_data['sim'] == 'SIM A' ? 'selected' : '' ?>>SIM A</option>
                                    <option value="SIM B1" <?= $personal_data['sim'] == 'SIM B1' ? 'selected' : '' ?>>SIM B1</option>
                                    <option value="SIM B2" <?= $personal_data['sim'] == 'SIM B2' ? 'selected' : '' ?>>SIM B2</option>
                                    <option value="SIM C" <?= $personal_data['sim'] == 'SIM C' ? 'selected' : '' ?>>SIM C</option>
                                    <option value="SIM D" <?= $personal_data['sim'] == 'SIM D' ? 'selected' : '' ?>>SIM D</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat sesuai KTP</label>
                                <textarea name="alamat" id="alamat" class="form-control"><?= $personal_data['alamat'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Status Tempat Tinggal</label>
                                <select name="status_tempat_tinggal" id="status_tempat_tinggal" class="form-control" required>
                                    <option value=""></option>
                                    <option value="Milik Sendiri" <?= $personal_data['status_tempat_tinggal'] == 'Milik Sendiri'  ? 'selected' : '' ?>>Milik Sendiri</option>
                                    <option value="Milik Orang Tua" <?= $personal_data['status_tempat_tinggal'] == 'Milik Orang Tua' ? 'selected' : '' ?>>Milik Orang Tua</option>
                                    <option value="Milik Saudara" <?= $personal_data['status_tempat_tinggal'] == 'Milik Saudara' ? 'selected' : '' ?>>Milik Saudara</option>
                                    <option value="Sewa" <?= $personal_data['status_tempat_tinggal'] == 'Sewa' ? 'selected' : '' ?>>Sewa</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">No Hp</label>
                                <input type="text" class="form-control" placeholder="No Hp *" name="hp" id="phone" required value="<?= $personal_data['hp'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">No NPWP</label>
                                <input type="text" class="form-control" placeholder="No NPWP *" name="no_npwp" value="<?= $personal_data['no_npwp'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">No SIM</label>
                                <input type="text" class="form-control" placeholder="No SIM *" name="no_sim" required value="<?= $personal_data['no_sim'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Domisili</label>
                                <textarea name="alamat_domisili" id="alamat" class="form-control"><?= $personal_data['alamat_domisili'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>


<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('#jk').select2({
        placeholder: 'Select a Jenis Kelamin'
    });
    $('#status_kawin').select2({
        placeholder: 'Select a Status Perkawinan'
    });
    $('#agama').select2({
        placeholder: 'Select a Agama'
    });
    $('#kewarganegaraan').select2({
        placeholder: 'Select a Kewarganegaraan'
    });
    $('#sim').select2({
        placeholder: 'Select a Jenis SIM'
    });
    $('#status_tempat_tinggal').select2({
        placeholder: 'Select a Status Tempat Tinggal'
    });

    $('#btn-upload-photo').on('click', function() {
        $(this).siblings('#filePhoto').trigger('click');
    });

    $('#btn-upload-cv').on('click', function() {
        $(this).siblings('#fileCv').trigger('click');
    });
</script>