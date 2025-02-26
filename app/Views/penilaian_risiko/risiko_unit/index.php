<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Profil Risiko Unit")) ?>

    <!-- Datatables css -->
    <link href="/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="https://cdn.dhtmlx.com/edge/dhtmlx.css" type="text/css">
    <script src="https://cdn.dhtmlx.com/edge/dhtmlx.js"></script>

    <?= $this->include('partials/head-css') ?>
    <style>
        /* CSS untuk mencegah teks panjang */
        table.dataTable td {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
        .page-container {
            padding: 20px;
        }
        .card-body {
            padding: 10px;
        }
        #grid_container {
            width: 100%;
            height: 400px;
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
                                <div id="grid_container"></div>
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
    <!-- END wrapper -->
    <script>
        // Initialize the DHTMLX grid
        var myGrid = new dhtmlXGridObject('grid_container');

        // Define grid columns and headers
        myGrid.setHeader("No,Level,Unit,Acuan,Status,Penilaian,Mitigasi,Risk Register,Top Risk,Monitoring KRI,History,Persetujuan,Status DPKMR,Monitoring");

        // Set column types
        myGrid.setColTypes("ed,ed,ed,ed,ed,ed,ed,ed,ed,ed,ed,ed,ed");

        // Set column widths
        myGrid.setInitWidths("60,100,100,150,100,100,150,150,150,150,150,150,100");

        // Set column alignments
        myGrid.setColAlign("center,center,center,center,center,center,center,center,center,center,center,center,center");

        // Enable sorting by default (no need for enableSorting)
        myGrid.setColSorting("int,str,str,str,str,str,str,str,str,str,str,str,str");

        // Enable editing
        myGrid.setEditable(true);

        // Set data for the grid (just an example of a few rows)
        myGrid.init();
        for (var i = 1; i <= 10; i++) {
            myGrid.addRow(i, [i, "Level " + i, "Unit " + i, "Ref " + i, "Status " + i, "Penilaian " + i, "Mitigasi " + i, "Risk Register " + i, "Top Risk " + i, "Monitoring KRI " + i, "History " + i, "Persetujuan " + i, "Status DPKMR " + i, "Monitoring " + i]);
        }

    </script>

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

    <script src="https://cdn.dhtmlx.com/edge/dhtmlx.js"></script>

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
                            "url": "<?php echo base_url() . 'master/master_profil_peristiwa/data' ?>",
                            "type": "GET",
                            "dataSrc": "data"
                        },
                        "pageLength": 10,
                        "columns": [
                            { "data": "id" },
                            { "data": "ket" },
                            { "data": "nama_peristiwa" },
                            { "data": "nama_sasaran" },
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
                    url: '<?= base_url('master/master_profil_peristiwa/save') ?>',
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
                    url: '<?= base_url('master/master_profil_peristiwa/edit') ?>/' + id,
                    type: 'GET',
                    success: function(response) {
                        var data = response.data;
                        $('#modalTitle').text('Edit Data');
                        $('#data_id').val(data.id);
                        $('#nama_peristiwa').val(data.nama_peristiwa);
                        $('#ket').val(data.ket);
                        $('#id_sasaran').val(data.id_sasaran); // Set value for id_sasaran
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
                            url: '<?= site_url('master/master_profil_peristiwa/delete') ?>/' + id,
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