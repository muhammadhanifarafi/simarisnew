<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Laporan Manajemen Risiko")) ?>

    <?= $this->include('partials/head-css') ?>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h4 class="header-title">Laporan Manajemen Risiko</h4>
                            </div>

                            <div class="card-body pt-0">
                                <form>
                                    <div id="basicwizard">
                                            <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                                <li class="nav-item">
                                                    <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab"
                                                        class="nav-link rounded-0 py-2">
                                                        <i class="bi bi-person-circle fs-18 align-middle me-1"></i>
                                                        <span class="d-none d-sm-inline">Laporan Manajemen Risiko</span>
                                                    </a>
                                                </li>   
                                                <li class="nav-item">
                                                    <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab"
                                                        class="nav-link rounded-0 py-2">
                                                        <i class="bi bi-check2-circle fs-18 align-middle me-1"></i>
                                                        <span class="d-none d-sm-inline">Laporan Hasil Penilaian Maturitas Manajemen Risiko & Budaya Risiko</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content b-0 mb-0">
                                                <div class="tab-pane" id="basictab1">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <?php foreach ($laporanmanajemenpenilaian as $index => $dokumen_item): ?>
                                                                <?php if ($dokumen_item['jenis'] == 1): ?>
                                                                    <td class="text-start">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <iconify-icon icon="bi:file-earmark" class="fs-22"></iconify-icon>
                                                                            <div>
                                                                                <span class="fw-medium">LAPORAN MANAJEMEN RISIKO (<?= $dokumen_item['tahun'] ?>)</span>
                                                                                <p class="text-muted mb-0"></p>
                                                                            </div>
                                                                            <div class="ms-auto">
                                                                                <br>
                                                                                <a href="<?= $dokumen_item['file_pdf']; ?>" class="btn btn-sm btn-success me-2" download>Download PDF</a>
                                                                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#previewModal<?= $index ?>">
                                                                                    Preview
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="previewModal<?= $index ?>" tabindex="-1" aria-labelledby="previewModal<?= $index ?>Label" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="previewModal<?= $index ?>Label">Preview PDF</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <!-- Preview PDF -->
                                                                                    <embed src="<?= $dokumen_item['file_pdf']; ?>" type="application/pdf" width="100%" height="600px" style="border: none; overflow: hidden;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                                <div class="tab-pane" id="basictab3">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <?php foreach ($laporanmanajemenpenilaian as $index => $dokumen_item): ?>
                                                                <?php if ($dokumen_item['jenis'] == 2): ?>
                                                                    <td class="text-start">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <iconify-icon icon="bi:file-earmark" class="fs-22"></iconify-icon>
                                                                            <div>
                                                                                <span class="fw-medium"><?php echo strtoupper("Laporan Hasil Penilaian Maturitas Manajemen Risiko & Budaya Risiko ({$dokumen_item['tahun']})"); ?></span>
                                                                                <p class="text-muted mb-0"></p>
                                                                            </div>
                                                                            <div class="ms-auto">
                                                                                <br>
                                                                                <a href="<?= $dokumen_item['file_pdf']; ?>" class="btn btn-sm btn-success me-2" download>Download PDF</a>
                                                                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#previewModal<?= $index ?>">
                                                                                    Preview
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="previewModal<?= $index ?>" tabindex="-1" aria-labelledby="previewModal<?= $index ?>Label" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="previewModal<?= $index ?>Label">Preview PDF</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <!-- Preview PDF -->
                                                                                    <embed src="<?= $dokumen_item['file_pdf']; ?>" type="application/pdf" width="100%" height="600px" style="border: none; overflow: hidden;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                            </div> <!-- tab-content -->

                                    </div> <!-- end #basicwizard-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div> <!-- container -->

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/footer-scripts') ?>

    <!-- Bootstrap Wizard Form js -->
    <script src="/vendor/vanilla-wizard/js/wizard.min.js"></script>

    <!-- Wizard Form Demo js -->
    <script src="/js/components/form-wizard.js"></script>

</body>

</html>