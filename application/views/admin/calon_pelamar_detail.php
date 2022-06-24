<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Detail Calon Pelamar</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin/Calon_Pelamar">Calon Pelamar</a></li>
                <li class="breadcrumb-item active">Detail Calon Pelamar</li>
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

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <h4 style="text-align: center;">Data Lowongan</h4>
                <div class="body table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td style="font-weight: bold;">Nama Lowongan</td>
                                <td>: <?= $apply['nama_lowongan'] ?></td>
                                <td style="font-weight: bold;">Maksimal Usia</td>
                                <td>: <?= $apply['max_usia'] ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Departement</td>
                                <td>: <?= $apply['nama_departement'] ?></td>
                                <td style="font-weight: bold;">Jabatan</td>
                                <td>: <?= $apply['nama_jabatan'] ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Minimal Jenjang Pendidikan</td>
                                <td>: <?= $apply['min_pend'] ?></td>
                                <td style="font-weight: bold;">Jurusan Pendidikan Yang Dibutuhkan</td>
                                <td>: <?= $apply['jurusan_pend'] ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Salary yang ditawarkan</td>
                                <td>: <?= $apply['salary'] ?></td>
                                <td style="font-weight: bold;">Tanggal Close</td>
                                <td>: <?= $apply['tgl_close'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="font-weight: bold;">Deskripsi :</td>]
                            </tr>
                            <tr>
                                <td colspan="4"><?= $apply['deskripsi'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="font-weight: bold;">Kriteria :</td>]
                            </tr>
                            <tr>
                                <td colspan="4"><?= $apply['kriteria'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card profile-header">
            <div class="body" style="text-align: center;">
                <div class="profile-image"> <img src="<?= base_url() ?>assets/data_pelamar/<?= $apply['foto_pelamar'] ?>" class="rounded-circle" alt="" style="width: 150px; height:250px"> </div>
                <div>
                    <h4 class="mb-0"><?= $apply['nama_pelamar']; ?></h4>
                    <p>Tanggal Apply Lamaran: <?= date('d, M Y', strtotime($apply['tgl_lamar'])) ?></p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>Basic Information</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-6">
                        <small class="text-muted">No KTP: </small>
                        <p><?= $apply['no_ktp'] ?></p>
                    </div>
                    <div class="col-6">
                        <small class="text-muted">Email: </small>
                        <p><?= $apply['email'] ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <small class="text-muted">Tempat Lahir: </small>
                        <p class="mb-0"><?= $apply['tempat_lahir'] ?></p>
                    </div>
                    <div class="col-6">
                        <small class="text-muted">Tanggal Lahir: </small>
                        <p><?= $apply['tgl_lahir'] ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <small class="text-muted">Jenis Kelamin: </small>
                        <p class="mb-0"><?= $apply['jk'] ?></p>
                    </div>
                    <div class="col-6">
                        <small class="text-muted">Agama: </small>
                        <p><?= $apply['agama'] ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <small class="text-muted">Status Perkawinan: </small>
                        <p class="mb-0"><?= $apply['status_kawin'] ?></p>
                    </div>
                    <div class="col-6">
                        <small class="text-muted">CV: </small>
                        <p><a href="<?= base_url() ?>assets/data_pelamar/<?= $apply['cv'] ?>" target="_blank"><button class="btn btn-primary"><i class="fa fa-search"></i> Lihat CV</button></a></p>
                        <p><a href="<?= base_url() ?>Admin/downloadCV/<?= $apply['cv'] ?>"><button class="btn btn-secondary"><i class="fa fa-download"></i> Download CV</button></a></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>General Information</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-6">
                        <small class="text-muted">No Hp: </small>
                        <p><?= $apply['hp'] ?></p>
                    </div>
                    <div class="col-6">
                        <small class="text-muted">Kewarganegaraan: </small>
                        <p><?= $apply['kewarganegaraan'] ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <small class="text-muted">No NPWP: </small>
                        <p class="mb-0"><?= $apply['no_npwp'] ?></p>
                    </div>
                    <div class="col-6">
                        <small class="text-muted">SIM yang dimiliki: </small>
                        <p><?= $apply['sim'] ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <small class="text-muted">No SIM: </small>
                        <p class="mb-0"><?= $apply['no_sim'] ?></p>
                    </div>
                    <div class="col-6">
                        <small class="text-muted">Alamat Sesuai KTP: </small>
                        <p><?= $apply['alamat'] ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <small class="text-muted">Alamat Domisili: </small>
                        <p class="mb-0"><?= $apply['alamat_domisili'] ?></p>
                    </div>
                    <div class="col-6">
                        <small class="text-muted">Status Tempat Tinggal: </small>
                        <p><?= $apply['status_tempat_tinggal'] ?></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <h4 style="text-align: center;">Data Pendidikan</h4>
                <div class="body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Nama Sekolah</th>
                                <th>Kota</th>
                                <th>Jurusan</th>
                                <th>Tahun Masuk</th>
                                <th>Tahun Keluar</th>
                                <th>Rata-Rata Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pendidikan as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->pendidikan_terakhir ?></td>
                                    <td><?= $row->nama_sekolah ?></td>
                                    <td><?= $row->kota ?></td>
                                    <td><?= $row->jurusan ?></td>
                                    <td><?= date('M, Y', strtotime($row->start_year)) ?></td>
                                    <td><?= date('M, Y', strtotime($row->end_year)) ?></td>
                                    <td><?= $row->nilai_pend ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <h4 style="text-align: center;">Data Pengalaman Kerja</h4>
                <div class="body table-responsive">
                    <table class="table table-striped" id="pengalaman">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Perusahaan</th>
                                <th>Posisi Terakhir</th>
                                <th>Jabatan Terakhir</th>
                                <th>Mulai Bekerja</th>
                                <th>Berakhir Bekerja</th>
                                <th>Gaji Pokok</th>
                                <th>Gaji Insentif</th>
                                <th>Fasilitas Terakhir</th>
                                <th>Alasan Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pengalaman as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->perusahaan ?></td>
                                    <td><?= $row->posisi_terakhir ?></td>
                                    <td><?= $row->jabatan_terakhir ?></td>
                                    <td><?= date('M, Y', strtotime($row->mulai_bekerja)) ?></td>
                                    <td><?= date('M, Y', strtotime($row->berakhir_bekerja)) ?></td>
                                    <td>Rp. <?= number_format($row->gaji_pokok, 0, ',', ',') ?></td>
                                    <td>Rp. <?= number_format($row->gaji_insentif, 0, ',', ',') ?></td>
                                    <td><?= $row->fasilitas_terakhir ?></td>
                                    <td><?= $row->alasan ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <h4 style="text-align: center;">Data Training</h4>
                <div class="body table-responsive">
                    <table class="table table-striped" id="pengalaman">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Training</th>
                                <th>Sertifikasi</th>
                                <th>Penyelenggara</th>
                                <th>Tahun Pelatihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($training as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->training ?></td>
                                    <td><?= $row->sertifikasi ?></td>
                                    <td><?= $row->penyelenggara ?></td>
                                    <td><?= date('M, Y', strtotime($row->tahun_pelatihan)) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="body">
                <h4 style="text-align: center;">Data Keahlian</h4>
                <div class="body table-responsive">
                    <table class="table table-striped" id="pengalaman">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Keahlian</th>
                                <th>Tingkat Keahlian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($keahlian as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->keterampilan ?></td>
                                    <td><?= $row->tingkat_keahlian_keterampilan ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="body">
                <h4 style="text-align: center;">Data Keahlian Bahasa</h4>
                <div class="body table-responsive">
                    <table class="table table-striped" id="pengalaman">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bahasa</th>
                                <th>Tingkat Keahlian Bahasa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($bahasa as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->bahasa_asing ?></td>
                                    <td><?= $row->tingkat_keahlian_bahasa ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12" style="margin-bottom: 20px;">
        <?php if ($apply['status_hasil'] == 'Menunggu') { ?>
            <a href="<?= base_url() ?>Admin/ApproveApply/<?= $apply['id_apply_job'] ?>"><button class="btn btn-success"><i class="fa fa-check"></i> Approve</button></a>
            <a href="<?= base_url() ?>Admin/CancelApply/<?= $apply['id_apply_job'] ?>"><button class="btn btn-danger"><i class="fa fa-close"></i> Reject</button></a>
        <?php } ?>

    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

<!-- DROPIFY -->
<script src="<?= base_url() ?>assets/vendor/dropify/js/dropify.min.js"></script>
<script src="<?= base_url() ?>assets/js/pages/forms/dropify.js"></script>

<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#role').select2({
            placeholder: 'Select a Role'
        });

        $('#password, #confirm_password').on('keyup', function() {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });
    });
</script>