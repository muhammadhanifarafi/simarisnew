<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Radar Charts")) ?>

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
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Basic Radar Chart</h4>
                                <div dir="ltr">
                                    <div id="basic-radar" class="apex-charts" data-colors="#5b69bc"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Radar with Polygon-fill</h4>
                                <div dir="ltr">
                                    <div id="radar-polygon" class="apex-charts" data-colors="#FF4560"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Radar – Multiple Series</h4>
                                <div dir="ltr">
                                    <div id="radar-multiple-series" class="apex-charts"
                                        data-colors="#5b69bc,#02a8b5,#fd7e14"></div>
                                    <div class="text-center mt-2">
                                        <button onclick="update()" class="btn btn-sm btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

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

    <!-- Apex Chart js -->
    <script src="/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Apex Chart Radar Demo js -->
    <script src="/js/components/chart-apex-radar.js"></script>

</body>

</html>