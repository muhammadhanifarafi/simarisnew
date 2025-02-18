<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Scatter Charts")) ?>

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
                                <h4 class="header-title">Scatter (XY) Chart</h4>
                                <div dir="ltr">
                                    <div id="basic-scatter" class="apex-charts" data-colors="#39afd1,#f9c851,#5b69bc">
                                    </div>
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
                                <h4 class="header-title">Scatter Chart - Datetime</h4>
                                <div dir="ltr">
                                    <div id="datetime-scatter" class="apex-charts"
                                        data-colors="#35b8e0,#f9c851,#5b69bc,#10c469,#fa5c7c"></div>
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
                                <h4 class="header-title">Scatter - Images</h4>
                                <div dir="ltr">
                                    <div id="scatter-images" class="apex-charts scatter-images-chart"
                                        data-colors="#3b5998,#e1306c"></div>
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

    <!-- Apex Chart Scatter Demo js -->
    <script src="/js/components/chart-apex-scatter.js"></script>

</body>

</html>