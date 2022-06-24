<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Detail Pelamar Tidak Diterima</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Manager"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Manager/Pelamar_Diterima">Data Lowongan</a></li>
                <li class="breadcrumb-item active">Detail Pelamar Tidak Diterima</li>
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

<div id="doc_print">
    <div class="row clearfix">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="body">
                    <h4 style="text-align: center;">Data Lowongan
                        <button style="float: right;" class="btn btn-secondary" id="print"><i class="fa fa-print"></i> Print</button>
                    </h4>
                    <hr>
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold;">Nama Lowongan</td>
                                    <td>: <?= $lowongan['nama_lowongan'] ?></td>
                                    <td style="font-weight: bold;">Maksimal Usia</td>
                                    <td>: <?= $lowongan['max_usia'] ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Departement</td>
                                    <td>: <?= $lowongan['nama_departement'] ?></td>
                                    <td style="font-weight: bold;">Jabatan</td>
                                    <td>: <?= $lowongan['nama_jabatan'] ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Minimal Jenjang Pendidikan</td>
                                    <td>: <?= $lowongan['min_pend'] ?></td>
                                    <td style="font-weight: bold;">Jurusan Pendidikan Yang Dibutuhkan</td>
                                    <td>: <?= $lowongan['jurusan_pend'] ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Salary yang ditawarkan</td>
                                    <td>: <?= $lowongan['salary'] ?></td>
                                    <td style="font-weight: bold;">Tanggal Close</td>
                                    <td>: <?= $lowongan['tgl_close'] ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="font-weight: bold;">Deskripsi :</td>]
                                </tr>
                                <tr>
                                    <td colspan="4"><?= $lowongan['deskripsi'] ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="font-weight: bold;">Kriteria :</td>]
                                </tr>
                                <tr>
                                    <td colspan="4"><?= $lowongan['kriteria'] ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="background-color: aqua; font-weight:bold;">Total Pelamar Yang Tidak Diterima : <?= $total['Total'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12" id="no_print">
            <div class="card">
                <div class="body">
                    <h4 style="text-align: center;">Data Pelamar Yang Tidak Diterima</h4>
                    <div class="body table-responsive">
                        <table id="pelamar" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelamar</th>
                                    <th>Email</th>
                                    <th>Hp</th>
                                    <th>Status Lamaran</th>
                                    <th>Tanggal Apply</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pelamar as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->nama_pelamar ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->hp ?></td>
                                        <td <?= $row->status_hasil == 'Sedang Di Proses' ? 'style="background-color:red;" class="text-light"'  : '' ?>><?= $row->status_hasil ?></td>
                                        <td><?= date('d, M Y', strtotime($row->tgl_lamar)) ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?= base_url() ?>Manager/Detail_Pelamar/<?= $row->id_apply_job ?>"> <button class="btn btn-primary"><i class="fa fa-search"></i> Detail</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12" id="table_print">
            <div class="card">
                <div class="body">
                    <h4 style="text-align: center;">Data Pelamar Yang Tidak Diterima</h4>
                    <hr>
                    <div class="body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Nama Pelamar</th>
                                    <th style="text-align: center;">Email</th>
                                    <th style="text-align: center;">Hp</th>
                                    <th style="text-align: center;">Status Lamaran</th>
                                    <th style="text-align: center;">Tanggal Apply</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pelamar as $row) { ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $no++ ?></td>
                                        <td style="text-align: center;"><?= $row->nama_pelamar ?></td>
                                        <td style="text-align: center;"><?= $row->email ?></td>
                                        <td style="text-align: center;"><?= $row->hp ?></td>
                                        <td style="text-align: center;" <?= $row->status_hasil == 'Sedang Di Proses' ? 'style="background-color:red;" class="text-light"'  : '' ?>><?= $row->status_hasil ?></td>
                                        <td style="text-align: center;"><?= date('d, M Y', strtotime($row->tgl_lamar)) ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- DATATABLE -->
<script src="<?= base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#pelamar').DataTable()
        var table_print = document.getElementById("table_print")
        table_print.style.display = "none"
        var no_print = document.getElementById("no_print");
        no_print.style.display = "block";

        $("#print").click(function() {
            no_print.style.display = "none";
            table_print.style.display = "block";



            print();
        });
    });

    function print() {
        var divToPrint = document.getElementById('doc_print');

        var newWin = window.open('', 'Print-Window');

        newWin.document.open();

        newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

        newWin.document.close();

        setTimeout(function() {
            newWin.close();
        }, 10);
        no_print.style.display = "block";
        table_print.style.display = "none";
    }
</script>