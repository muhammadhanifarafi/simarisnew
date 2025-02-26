<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Master Mitigasi - Kamus Risiko")) ?>

    <!-- Datatables css -->
    <link href="/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>
    <style>
        /* CSS untuk mencegah teks panjang */
        table.dataTable td {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <div class="page-container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Master Mitigasi - Kamus Risiko</h4>
                                <!-- Add "Tambah" button -->
                                <button type="button" class="btn btn-primary mb-3 add-btn" data-bs-toggle="modal" data-bs-target="#addDataModal">
                                    Tambah Data
                                </button>
                                <div class="table-responsive">
                                <table id="scroll-horizontal-datatable" class="display table table-striped table-bordered dt-responsive" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="15%">Jenis Proyek</th>
                                            <th width="60%">Sasaran</th>
                                            <th width="60%">Peristiwa</th>
                                            <th width="60%">Penyebab</th>
                                            <th width="60%">Mitigasi</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                              </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->

            </div> <!-- container -->

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- Modal to Add Data -->
    <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Tambah Peristiwa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addDataForm">
                        <input type="hidden" id="data_id" name="id">
                        <div class="mb-3">
                            <label for="id_sasaran" class="form-label">Sasaran</label>
                            <select class="form-select" id="id_sasaran" name="id_sasaran" required>
                                <option value="">Pilih Sasaran</option>
                                <?php foreach ($sasaran as $row) : ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['nama_sasaran'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_peristiwa" class="form-label">Peristiwa</label>
                            <select class="form-select" id="id_peristiwa" name="id_peristiwa" required>
                                <option value="">Pilih Peristiwa</option>
                                <?php foreach ($peristiwa as $row) : ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['nama_peristiwa'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_penyebab" class="form-label">Penyebab</label>
                            <select class="form-select" id="id_penyebab" name="id_penyebab" required>
                                <option value="">Pilih Penyebab</option>
                                <?php foreach ($penyebab as $row) : ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['nama_penyebab'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_mitigasi" class="form-label">Mitigasi</label>
                            <input type="text" class="form-control" id="nama_mitigasi" name="nama_mitigasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="ket" class="form-label">Jenis Proyek</label>
                            <select class="form-select" id="ket" name="ket" required>
                                <option value="">Pilih Jenis Proyek</option>
                                <option value="PEROLEHAN">PEROLEHAN</option>
                                <option value="PELAKSANAAN">PELAKSANAAN</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveDataBtn">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END wrapper -->

    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/footer-scripts') ?>

    <!-- Datatables js -->
    <script src="/vendor/datatables.net/js/dataTables.min.js"></script>
    <script src="/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <!-- Datatable Demo js -->
    <script src="/js/components/table-datatable.js"></script>

    <script>
        $(document).ready(function() {
            document.title = 'List Users'
            datatables();
        });

        function datatables() {
            table = $('#scroll-horizontal-datatable').DataTable({
                        "responsive": true,
                        "processing": true,
                        "serverSide": true,
                        "ordering": true,
                        "bDestroy": true,
                        "ajax": {
                            "url": "<?php echo base_url() . 'master/master_profil_mitigasi/data' ?>",
                            "type": "GET",
                            "dataSrc": "data"
                        },
                        "pageLength": 10,
                        "columns": [
                            { "data": "id" },
                            { "data": "ket" },
                            { "data": "nama_sasaran" },
                            { "data": "nama_peristiwa" },
                            { "data": "nama_penyebab" },
                            { "data": "nama_mitigasi" },
                            { "data": "action", "orderable": false }
                        ],
                        "columnDefs": [
                            {
                                "targets": 0,
                                "searchable": false,
                                "orderable": false,
                                "className": "text-right"
                            },
                            {
                                "targets": 1,
                                "orderable": false,
                                "className": "text-left"
                            },
                            {
                                "targets": 2,
                                "orderable": false,
                                "className": "text-left"
                            },
                            {
                                "targets": 3,
                                "orderable": false,
                                "className": "text-left"
                            },
                            {
                                "targets": 4,
                                "orderable": false,
                                "className": "text-left"
                            },
                            {
                                "targets": 5,
                                "orderable": false,
                                "className": "text-left"
                            }
                        ]
                    });
        }

        function refresh_list() {
            $('.dataTable').each(function() {
                dt = $(this).dataTable();
                dt.fnDraw();
            })
        }

        $(document).ready(function() {
            $('#saveDataBtn').click(function() {
                var formData = $('#addDataForm').serialize();
                $.ajax({
                    url: '<?= base_url('master/master_profil_mitigasi/save') ?>',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            // Show success SweetAlert
                            Swal.fire({
                                title: 'Success!',
                                text: 'Data has been saved successfully.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(function() {
                                $('#addDataModal').modal('hide');  // Close modal
                                table.ajax.reload();  // Reload the table to show the new data
                                $('#addDataForm')[0].reset();  // Clear form fields
                            });
                        } else {
                            // Show error SweetAlert
                            Swal.fire({
                                title: 'Error!',
                                text: 'There was an error saving the data.',
                                icon: 'error',
                                confirmButtonText: 'Try Again'
                            });
                        }
                    }
                });
            });

            $(document).on('click', '.add-btn', function() {
                $('#addDataForm')[0].reset();
                $('#modalTitle').text('Tambah Data');
                $('#saveDataBtn').text('Simpan');
                $('#addDataModal').modal('show');
            });

            $(document).on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: '<?= base_url('master/master_profil_mitigasi/edit') ?>/' + id,
                    type: 'GET',
                    success: function(response) {
                        var data = response.data;
                        $('#modalTitle').text('Edit Data');
                        $('#data_id').val(data.id);
                        $('#nama_mitigasi').val(data.nama_mitigasi);
                        $('#ket').val(data.ket);
                        $('#id_sasaran').val(data.id_sasaran); // Set value for id_sasaran
                        $('#id_peristiwa').val(data.id_peristiwa); // Set value for id_peristiwa
                        $('#id_penyebab').val(data.id_penyebab); // Set value for id_penyebab
                        $('#saveDataBtn').text('Update');
                        $('#addDataModal').modal('show');
                    }
                });
            });

            $(document).on('click', '.delete-btn', function() {
                var id = $(this).data('id');
                // SweetAlert untuk konfirmasi penghapusan
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Melakukan penghapusan jika user mengonfirmasi
                        $.ajax({
                            url: '<?= site_url('master/master_profil_mitigasi/delete') ?>/' + id,
                            type: 'POST',
                            success: function(response) {
                                if (response.status === 'success') {
                                    // Tampilkan SweetAlert setelah berhasil menghapus
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    ).then(function() {
                                        table.ajax.reload(); // Reload the table after deleting
                                    });
                                } else {
                                    // Show error SweetAlert
                                    Swal.fire({
                                        title: 'Error!',
                                        text: 'There was an error deleting the record.',
                                        icon: 'error',
                                        confirmButtonText: 'Try Again'
                                    });
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>

</body>
</html>