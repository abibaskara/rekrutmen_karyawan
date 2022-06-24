<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Data Pelamar</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">Data Pelamar</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h5 style="text-align: center; font-weight:bold;">Hai <?= $_SESSION['nama_user'] ?> !</h5>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form id="validation" method="POST">
                    <h3>Data Diri</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="profile-image" style="text-align:center;"> <img src="<?= base_url() ?>assets/profile/default.png" class="rounded-circle" alt="" style="width: 40%;"> </div>
                                <br>
                                <div class="form-group form-float">
                                    <label for="">No. KTP</label>
                                    <input type="text" class="form-control" placeholder="No KTP *" id="no_ktp" name="no_ktp" required>
                                </div>
                                <div class="form-group form-float">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap *" id="nama_lengkap" name="nama_lengkap" required>
                                </div>
                                <div class="form-group form-float">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" placeholder="Email *" name="email" required>
                                </div>
                                <div class="form-group form-float">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir *" name="tempat_lahir" required>
                                </div>
                                <div class="form-group form-float">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" class="form-control" placeholder="Tempat Lahir *" name="tgl_lahir" required>
                                </div>
                                <div class="form-group form-float">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control" required>
                                        <option value=""></option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <label for="">No Hp</label>
                                    <input type="text" class="form-control" placeholder="No Hp *" name="hp" id="phone" required>
                                </div>
                            </div>
                            <div class=" col-lg-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <label for="">Status Perkawinan</label>
                                            <select name="status_kawin" id="status_kawin" class="form-control" required>
                                                <option value=""></option>
                                                <option value="Lajang">Lajang</option>
                                                <option value="Menikah">Menikah</option>
                                                <option value="Janda">Janda</option>
                                                <option value="Duda">Duda</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="">Kewarganegaraan</label>
                                            <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                                                <option value=""></option>
                                                <option value="WNI">WNI</option>
                                                <option value="WNA">WNA</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="">SIM yang dimiliki</label>
                                            <select name="sim" id="sim" class="form-control" required>
                                                <option value=""></option>
                                                <option value="SIM A">SIM A</option>
                                                <option value="SIM B1">SIM B1</option>
                                                <option value="SIM B2">SIM B2</option>
                                                <option value="SIM C">SIM C</option>
                                                <option value="SIM D">SIM D</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <label for="">Agama</label>
                                            <select name="agama" id="agama" class="form-control" required style="width: 100%;">
                                                <option value=""></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Khatolik">Khatolik</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                                <option value="Keyakinan Tertentu">Keyakinan Tertentu</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="">No NPWP</label>
                                            <input type="text" class="form-control" placeholder="No NPWP *" name="no_npwp" required>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="">No SIM</label>
                                            <input type="text" class="form-control" placeholder="No SIM *" name="no_sim" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <label for="">Alamat sesuai KTP</label>
                                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="">Alamat Domisili</label>
                                            <textarea name="alamat_domisili" id="alamat" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="">Status Tempat Tinggal</label>
                                            <select name="status_tempat_tinggal" id="status_tempat_tinggal" class="form-control" required>
                                                <option value=""></option>
                                                <option value="Milik Sendiri">Milik Sendiri</option>
                                                <option value="Milik Orang Tua">Milik Orang Tua</option>
                                                <option value="Milik Saudara">Milik Saudara</option>
                                                <option value="Sewa">Sewa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <label for="">CV <small>max 3Mb <span style="color: red;"></span></small></label>
                                            <input type="file" class="form-control" name="cv" accept=".doc, .docx, .pdf" max-file-size="3072" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <label for="">Foto Pelamar <span style="color: red;"></span></label>
                                            <input type="file" class="form-control" accept=".jpg, .png, .jpeg" name="foto_pelamar" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Pendidikan</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <label for="">Pendidikan Terakhir</label>
                            <select name="pendidikan_terakhir" id="pendidikan_terakhir" style="width: 100%;" class="form-control">
                                <option value=""></option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                <option value="D3">D3</option>
                                <option value="Strata Satu (S1)">Strata Satu (S1)</option>
                                <option value="Strata Dua (S2)">Strata Dua (S2)</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <label for="">Nama Sekolah/Perguruan Tinggi/Univeristas</label>
                            <input type="text" name="nama_sekolah" placeholder="Nama Sekolah/Perguruan Tinggi/Univeristas *" class="form-control" required>
                        </div>
                        <div class="form-group form-float">
                            <label for="">Kota Sekolah/Perguruan Tinggi/Univeristas</label>
                            <input type="text" name="kota" placeholder="Kota Sekolah/Perguruan Tinggi/Univeristas *" class="form-control" required>
                        </div>
                        <div class="form-group form-float">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" placeholder="Jurusan *" class="form-control" required>
                        </div>
                        <div class="form-group form-float">
                            <label for="">Tahun Masuk</label>
                            <input type="month" name="start_year" placeholder="Tahun Masuk *" class="form-control">
                        </div>
                        <div class="form-group form-float">
                            <label for="">Tahun Lulus</label>
                            <input type="month" name="end_year" placeholder="Tahun Lulus *" class="form-control">
                        </div>
                        <div class="form-group form-float">
                            <label for="">Nilai Rata-Rata/IPK/GPA</label>
                            <input type="text" name="nilai_pend" placeholder="Nilai Rata-Rata/IPK/GPA *" class="form-control" required>
                        </div>
                    </fieldset>
                    <h3>Pengalaman</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-float">
                                    <label for="">Nama Perusahaan Sebelumnya</label>
                                    <input type="text" name="perusahaan" placeholder="Nama Perusahaan Sebelumnya *" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <label for="">Posisi Pengalaman Kerja Terakhir</label>
                                    <input type="text" name="posisi_terakhir" placeholder="Posisi Pengalaman Kerja Terakhir *" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <label for="">Posisi Jabatan Terakhir</label>
                                    <input type="text" name="jabatan_terakhir" placeholder="Posisi Jabatan Terakhir *" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <label for="">Mulai Bekerja di perusahaan sebelumnya</label>
                                    <input type="month" name="mulai_bekerja" placeholder="Mulai Bekerja di perusahaan sebelumnya *" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <label for="">Berakhir Bekerja di perusahaan sebelumnya</label>
                                    <input type="month" name="berakhir_bekerja" placeholder="Berakhir Bekerja di perusahaan sebelumnya *" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <label for="">Penghasilan Pokok Terakhir (Gaji Perbulan)</label>
                                    <input type="text" name="gaji_pokok" id="gaji_pokok" placeholder="Penghasilan Pokok Terakhir (Gaji Perbulan) *" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <label for="">Penghasilan Tambahan Terakhir (Insentif Perbulan)</label>
                                    <input type="text" name="gaji_insentif" id="gaji_insentif" placeholder="Penghasilan Tambahan Terakhir (Insentif Perbulan) *" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-float">
                                    <label for="">Fasilitas Terakhir yang didapatkan di perusahaan sebelumnya</label>
                                    <textarea name="fasilitas_terakhir" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-float">
                                    <label for="">Alasan Berhenti dari pekerjaan sebelumnya</label>
                                    <textarea name="alasan" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Keahlian</h3>
                    <fieldset>
                        <div class="row">
                            <h4>Keahlian</h4>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Keahlian</th>
                                        <th>Tingkat Keahlian</th>
                                    </tr>
                                </thead>
                                <tbody id="loop_keahlian">
                                    <tr>
                                        <td>
                                            <input type="text" name="keterampilan" placeholder="Keahlian *" class="form-control">
                                        </td>
                                        <td>
                                            <select name="tingkat_keahlian_keterampilan" id="tingkat_keahlian_keterampilan" class="form-control" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="Sedang">Sedang</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Sangat Baik">Sangat Baik</option>
                                                <option value="Ahli">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <h4>Training</h4>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Training yang pernah di ikuti</th>
                                        <th>Sertifikasi yang pernah di ikuti</th>
                                        <th>Penyelenggara Pelatihan</th>
                                        <th>Tahun Pelatihan</th>
                                    </tr>
                                </thead>
                                <tbody id="loop_keahlian">
                                    <tr>
                                        <td>
                                            <input type="text" name="training" placeholder="Training yang pernah di ikuti *" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="sertifikasi" placeholder="Sertifikasi yang pernah di ikuti *" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="penyelenggara" placeholder="Penyelenggara Pelatihan *" class="form-control">
                                        </td>
                                        <td>
                                            <input type="month" name="tahun_pelatihan" placeholder="Tahun Pelatihan *" class="form-control">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <h4>Bahasa</h4>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Bahasa Asing yang dikuasai</th>
                                        <th>Tingkat Keahlian Bahasa asing</th>
                                    </tr>
                                </thead>
                                <tbody id="loop_keahlian">
                                    <tr>
                                        <td>
                                            <input type="text" name="bahasa_asing" placeholder="Bahasa Asing yang dikuasai *" class="form-control">
                                        </td>
                                        <td>
                                            <select name="tingkat_keahlian_bahasa" id="tingkat_keahlian_bahasa" class="form-control" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="Sedang">Sedang</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Sangat Baik">Sangat Baik</option>
                                                <option value="Ahli">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>


<script src="<?= base_url() ?>assets/vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?= base_url() ?>assets/vendor/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<!-- SWEETALERT -->
<script src="<?= base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->

<!-- page js file -->
<script src="<?= base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/pages/forms/form-wizard.js"></script>

<!-- MASK MONEY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.maskMoney.js"></script>

<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
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
        $('#tingkat_keahlian_keterampilan').select2({
            placeholder: 'Select a Tingkat Keahlian Keterampilan *'
        });
        $('#tingkat_keahlian_bahasa').select2({
            placeholder: 'Tingkat Keahlian Bahasa Asing *'
        });
        $('#pendidikan_terakhir').select2({
            placeholder: 'Pendidikan Terakhir *'
        });
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
    var form = $('#validation').show();
    form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',
        onInit: function(event, currentIndex) {
            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex > newIndex) {
                return true;
            }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            $.ajax({
                url: "<?= base_url('User/daftarDataDiri'); ?>",
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(status) {
                    if (status = true) {
                        swal({
                            title: "Success!",
                            text: "Data Berhasil Disimpan.",
                            type: "success",
                            timer: 2000,
                            showConfirmButton: false
                        }, function() {
                            window.location.href = "<?= base_url() ?>User";
                        });
                    } else {
                        swal({
                            title: "Success!",
                            text: "Data Gagal Disimpan.",
                            type: "error",
                            timer: 2000,
                            showConfirmButton: false
                        }, function() {
                            window.location.href = "<?= base_url() ?>User/Data_Pelamar";
                        });
                    }
                }
            });
        }
    });

    form.validate({
        highlight: function(input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function(input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    });

    function setButtonWavesEffect(event) {
        $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
        $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
    }
</script>