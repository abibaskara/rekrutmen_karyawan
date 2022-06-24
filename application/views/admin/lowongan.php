<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Data Lowongan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Data Lowongan</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <!-- <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button> -->
                    <a href="<?= base_url() ?>Admin/Tambah_Lowongan"><button type="button" class="btn btn-secondary"><i class="fa fa-plus"></i> Tambah Lowongan</button></a>
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
            <div class="header">
                <h2>Data Lowongan </h2>
                <hr>
                <p>Jika data lowongan kurang dari tanggal close maka status otomatis akan update menjadi tidak aktif, Jika ingin mengaktifkan kembali update data tanggal close <span style="color: red;">*</span></p>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="lowongan" class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lowongan</th>
                                <th>Departement</th>
                                <th>Jabatan</th>
                                <th>Maks Usia</th>
                                <th>Minimal Pendidikan</th>
                                <th>Tanggal Close</th>
                                <th>Status</th>
                                <th> Soal </th>
                                <th> Psikotes </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($lowongan as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama_lowongan ?></td>
                                    <td><?= $row->nama_departement ?></td>
                                    <td><?= $row->nama_jabatan ?></td>
                                    <td><?= $row->max_usia ?></td>
                                    <td><?= $row->min_pend ?></td>
                                    <td><?= date('d/m/Y', strtotime($row->tgl_close)) ?></td>
                                    <td <?= $row->status == 0 ? 'style="background-color:red;" class="text-light"'  : '' ?>><?= $row->status == 1 ? 'Aktif'  : 'Tidak Aktif'  ?></td>
                                    <td>
                                        <?php if ($row->id_test == NULL) { ?>
                                            <a href="<?= base_url() ?>Admin/Tambah_Soal/<?= $row->id_lowongan ?>"> <button class="btn btn-danger"><i class="fa fa-plus-square-o"></i> Tambah Soal</button></a>
                                        <?php } else { ?>
                                            <a href="<?= base_url() ?>Admin/Soal/<?= $row->id_lowongan ?>"> <button class="btn btn-warning"><i class="fa fa-eye"></i> Lihat Soal</button></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($row->id_psikotes == NULL) { ?>
                                            <a href="<?= base_url() ?>Admin/Tambah_Psikotes/<?= $row->id_lowongan ?>"> <button class="btn btn-danger"><i class="fa fa-plus-square-o"></i> Tambah Psikotes</button></a>
                                        <?php } else { ?>
                                            <a href="<?= base_url() ?>Admin/Psikotes/<?= $row->id_lowongan ?>"> <button class="btn btn-warning"><i class="fa fa-eye"></i> Lihat Psikotes</button></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() ?>Admin/Edit_Lowongan/<?= $row->id_lowongan ?>"> <button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a>
                                        <a data-toggle="modal" data-target="#delete<?= $row->id_lowongan ?>"> <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ###########################MODAL########################### -->

<div class="modal fade" id="tambah_user" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah User</h4>
            </div>
            <form action="<?= base_url() ?>Admin/tambahUser" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="nama_user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password <span id='message'></span></label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" name="no_telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="role" id="role" class="form-control" style="width: 100%;" required>
                            <option value=""></option>
                            <option value="Admin">Admin</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Manager">Manager</option>
                            <option value="User">User</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="dropify" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($lowongan as $row) { ?>
    <div class="modal fade" id="delete<?= $row->id_lowongan ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Delete Lowongan!</h4>
                </div>
                <form action="<?= base_url() ?>Admin/deleteLowongan" method="POST">
                    <div class="modal-body">
                        <i class="fa fa-trash" style="color: red;"></i>
                        <label class="control-label">Anda Yakin Ingin Menghapus Data?</label>
                        <input type="hidden" name="id" value="<?= $row->id_lowongan ?>" />
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes, Delete It!</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

<!-- DATATABLE -->
<script src="<?= base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<!-- SWEETALERT -->
<script src="<?= base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->

<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('#lowongan').DataTable()
</script>