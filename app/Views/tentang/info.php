<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "FAQ")) ?>

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
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="general">Tentang Sistem Simaris</h4>
                                <div class="accordion" id="accordionExample">
                                    <?php 
                                    // Inisialisasi active class untuk accordion pertama
                                    $active_class = 'show'; 
                                    foreach ($simaris_content as $index => $content): 
                                    ?>

                                        <!-- Accordion for "penjelasan_sistem_informasi" -->
                                        <?php if (isset($content['penjelasan_sistem_simaris'])): ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSistemInformasi<?php echo $content['id']; ?>">
                                                    <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSistemInformasi<?php echo $content['id']; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapseSistemInformasi<?php echo $content['id']; ?>">
                                                        Sistem Informasi
                                                    </button>
                                                </h2>
                                                <div id="collapseSistemInformasi<?php echo $content['id']; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? $active_class : ''; ?>" aria-labelledby="headingSistemInformasi<?php echo $content['id']; ?>" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <?php echo $content['penjelasan_sistem_simaris']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Accordion for "penjelasan_modul_simaris" -->
                                        <?php if (isset($content['penjelasan_modul_simaris'])): ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingModulSimaris<?php echo $content['id']; ?>">
                                                    <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseModulSimaris<?php echo $content['id']; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapseModulSimaris<?php echo $content['id']; ?>">
                                                        Modul Simaris
                                                    </button>
                                                </h2>
                                                <div id="collapseModulSimaris<?php echo $content['id']; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? $active_class : ''; ?>" aria-labelledby="headingModulSimaris<?php echo $content['id']; ?>" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <?php echo $content['penjelasan_modul_simaris']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Accordion for "panduan_penggunaan" -->
                                        <?php if (isset($content['panduan_penggunaan'])): ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingPanduanPenggunaan<?php echo $content['id']; ?>">
                                                    <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePanduanPenggunaan<?php echo $content['id']; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapsePanduanPenggunaan<?php echo $content['id']; ?>">
                                                        Panduan Penggunaan
                                                    </button>
                                                </h2>
                                                <div id="collapsePanduanPenggunaan<?php echo $content['id']; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? $active_class : ''; ?>" aria-labelledby="headingPanduanPenggunaan<?php echo $content['id']; ?>" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <?php echo $content['panduan_penggunaan']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



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

</body>

</html>