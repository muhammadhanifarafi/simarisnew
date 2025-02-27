<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Referensi")) ?>

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
                                <h4 class="header-title">Referensi</h4>
                            </div>

                            <div class="card-body pt-0">
                                <form>
                                    <div id="basicwizard">
                                        <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                            <li class="nav-item">
                                                <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab"
                                                    class="nav-link rounded-0 py-2">
                                                    <i class="bi bi-person-circle fs-18 align-middle me-1"></i>
                                                    <span class="d-none d-sm-inline">Kebijakan</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab"
                                                    class="nav-link rounded-0 py-2">
                                                    <i class="bi bi-emoji-smile fs-18 align-middle me-1"></i>
                                                    <span class="d-none d-sm-inline">Pedoman</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab"
                                                    class="nav-link rounded-0 py-2">
                                                    <i class="bi bi-check2-circle fs-18 align-middle me-1"></i>
                                                    <span class="d-none d-sm-inline">Prosedur</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab"
                                                    class="nav-link rounded-0 py-2">
                                                    <i class="bi bi-check2-circle fs-18 align-middle me-1"></i>
                                                    <span class="d-none d-sm-inline">Materi</span>
                                                </a>
                                            </li>
                                        </ul>

                                            <div class="tab-content b-0 mb-0">
                                                <div class="tab-pane" id="basictab1">
                                                    <div class="row">
                                                        <div class="col-12">
                                                                <td class="text-start">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <iconify-icon icon="bi:file-earmark" class="fs-22"></iconify-icon>
                                                                    <div>
                                                                        <span class="fw-medium">KEBIJAKAN MANAJEMEN RISIKO PT SURVEYOR INDONESIA</span>
                                                                        <p class="text-muted mb-0"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="home1">
                                                                    <br>
                                                                    <ul class="list-group">
                                                                        <?php foreach ($dokumen as $index => $dokumen_item): ?>
                                                                            <li class="list-group-item d-flex align-items-center">
                                                                                <span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start"><?= $index + 1 ?></span>
                                                                                <span class="text-muted me-3"><?= $dokumen_item['kode_dokumen'] ?> <?= $dokumen_item['judul'] ?> </span>
                                                                                <a href="<?= base_url('uploads/' . $dokumen_item['file_pdf']) ?>" class="btn btn-sm btn-success float-end" download>Download PDF</a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>

                                            <div class="tab-pane" id="basictab2">
                                            <div class="row">
                                                        <div class="col-12">
                                                                <td class="text-start">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <iconify-icon icon="bi:file-earmark" class="fs-22"></iconify-icon>
                                                                    <div>
                                                                        <span class="fw-medium">PEDOMAN</span>
                                                                        <p class="text-muted mb-0"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="home1">
                                                                    <br>
                                                                    <ul class="list-group">
                                                                        <?php foreach ($pedoman as $index => $pedoman_item): ?>
                                                                            <li class="list-group-item d-flex align-items-center">
                                                                                <a href="<?= base_url($pedoman_item['link_file_pedoman']) ?>" class="btn btn-sm btn-success float-end" download>Download PDF</a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                            </div>

                                            <div class="tab-pane" id="basictab3">
                                            <div class="row">
                                                        <div class="col-12">
                                                                <td class="text-start">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <iconify-icon icon="bi:file-earmark" class="fs-22"></iconify-icon>
                                                                    <div>
                                                                        <span class="fw-medium">PROSEDUR</span>
                                                                        <p class="text-muted mb-0"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="home1">
                                                                    <br>
                                                                    <ul class="list-group">
                                                                        <?php foreach ($prosedur as $index => $prosedur_item): ?>
                                                                            <li class="list-group-item d-flex align-items-center">
                                                                                <span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start"><?= $index + 1 ?></span>
                                                                                <span class="text-muted me-3"><?= $prosedur_item['kode_dokumen'] ?> <?= $prosedur_item['judul'] ?> </span>
                                                                                <a href="<?= base_url('uploads/' . $prosedur_item['file_pdf']) ?>" class="btn btn-sm btn-success float-end" download>Download PDF</a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                            </div>
                                            <div class="tab-pane" id="basictab4">
                                            <div class="row">
                                                        <div class="col-12">
                                                                <td class="text-start">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <iconify-icon icon="bi:file-earmark" class="fs-22"></iconify-icon>
                                                                    <div>
                                                                        <span class="fw-medium">MATERI TRAINING, WORKSHOP, SOSIALISASI</span>                                                                        </span>
                                                                        <p class="text-muted mb-0"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="home1">
                                                                    <br>
                                                                    <ul class="list-group">
                                                                        <?php foreach ($materi as $index => $materi_item): ?>
                                                                            <li class="list-group-item d-flex align-items-center">
                                                                                <span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start"><?= $index + 1 ?></span>
                                                                                <span class="text-muted me-3"><?= $materi_item['judul'] ?> </span>
                                                                                <a href="<?= base_url('uploads/' . $materi_item['file_pdf']) ?>" class="btn btn-sm btn-success float-end" download>Download PDF</a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
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