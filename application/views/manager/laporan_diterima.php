<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Laporan Pelamar Diterima</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Manager"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Laporan Pelamar Diterima</li>
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
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Laporan Pelamar Diterima </h2>
                <hr>
            </div>
            <div class="body">
                <div class="col-lg-12 col-md-12">
                    <label>Tanggal</label>
                    <div class="input-daterange input-group" data-provide="datepicker">
                        <input type="text" class="input-sm form-control" id="start_date" name="start">
                        <span class="input-group-addon">to</span>
                        <input type="text" class="input-sm form-control" id="end_date" name="end">
                    </div>
                    <button class="btn btn-primary mt-3" style="width: 100%;" id="search"><i class="fa fa-search"></i> Search</button>
                    <button class="btn btn-danger mt-3" style="width: 100%;" id="reset"> Reset</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12" id="print_doc">
        <div id="view_laporan_diterima"></div>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?= base_url() ?>assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js -->
<script src="<?= base_url() ?>assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js -->
<script src="<?= base_url() ?>assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->
<script src="<?= base_url() ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js -->
<script src="<?= base_url() ?>assets/vendor/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js -->

<!-- SWEETALERT -->
<script src="<?= base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->

<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(function() {

        $('#search').click(function() {
            var start_date = $('#start_date').val();
            start_date = getFormattedDate(start_date);
            var end_date = $('#end_date').val();
            end_date = getFormattedDate(end_date);

            $.ajax({
                url: "../Manager/get_laporan_diterima",
                type: "GET",
                dataType: "JSON",
                data: {
                    start_date: start_date,
                    end_date: end_date,
                },
                success: function(x) {
                    console.log(x);
                    if (x.data.length > 0) {
                        $('#view_laporan_diterima').html(`
                            <div class="card">
                                <div class="header">
                                    <h2>Pelamar Diterima </h2>
                                    <hr>
                                </div>
                                <div class="body">
                                <button id="print" class="btn btn-secondary btn-sm" style="float:right;"><i class="fa fa-print"></i> Print</button>
                                    <div class="body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Tanggal Apply</th>
                                                    <th style="text-align: center;">Nama Lowongan</th>
                                                    <th style="text-align: center;">Nama</th>
                                                    <th style="text-align: center;">Email</th>
                                                    <th style="text-align: center;">Hp</th>
                                                    <th style="text-align: center;">Status Lamaran</th>
                                                </tr>
                                            </thead>
                                            <tbody id='preview_data'></tbody>
                                            <tfoot'>
                                                <tr>
                                                    <th colspan="5" style="text-align: center;">Total</th>
                                                    <th colspan="2" style="text-align: center;">${x.total.Total}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        `);


                        $('#print').click(function() {
                            $('#print').hide(true);
                            var divToPrint = document.getElementById('print_doc');

                            var newWin = window.open('', 'Print-Window');

                            newWin.document.open();

                            newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

                            newWin.document.close();

                            setTimeout(function() {
                                newWin.close();
                                $('#print').show(true);
                            }, 10);
                        })
                    } else {
                        $('#view_laporan_diterima').html(`
                            <div class="card">
                                <div class="header">
                                    <h2>Pelamar Diterima </h2>
                                    <hr>
                                </div>
                                <div class="body">
                                    <div class="body table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Tanggal Apply</th>
                                                    <th style="text-align: center;">Nama Lowongan</th>
                                                    <th style="text-align: center;">Nama</th>
                                                    <th style="text-align: center;">Email</th>
                                                    <th style="text-align: center;">Hp</th>
                                                    <th style="text-align: center;">Status Lamaran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7" style="text-align:center">Tidak Ada Data</td>
                                                </tr>
                                            </tbody>
                                            <tfoot'>
                                                <tr>
                                                    <th colspan="5" style="text-align: center;">Total</th>
                                                    <th colspan="2" style="text-align: center;">${x.total.Total}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        `);
                    }
                    var i = 1
                    $.each(x.data, function(k, v) {
                        var body = `
                            <tr>
                                <td style='text-align: center;'>${i}</td>
                                <td style='text-align: center;'>${getTanggal(v.tgl_lamar)}</td>
                                <td style='text-align: center;'>${v.nama_lowongan}</td>
                                <td style='text-align: center;'>${v.nama_pelamar}</td>
                                <td style='text-align: center;'>${v.email}</td>
                                <td style='text-align: center;'>${v.hp}</td>
                                <td style='text-align: center;'>${v.status_hasil}</td>
                            </tr>
                        `
                        i++
                        $('#preview_data').append(body);
                    })
                }
            })
        })

        $('#reset').click(function() {
            $('#view_laporan_diterima').html("")
            $('#preview_data').html("")
            $('#start_date').val("");
            $('#end_date').val("");
        })

    })

    function getFormattedDate(date) {
        var date = new Date(date);
        let year = date.getFullYear();
        let month = (1 + date.getMonth()).toString().padStart(2, '0');
        let day = date.getDate().toString().padStart(2, '0');

        return year + '-' + month + '-' + day;
    }

    function getTanggal(date) {
        var date = new Date(date);
        let year = date.getFullYear();
        let month = (1 + date.getMonth()).toString().padStart(2, '0');
        let day = date.getDate().toString().padStart(2, '0');

        return day + '-' + month + '-' + year;
    }
</script>