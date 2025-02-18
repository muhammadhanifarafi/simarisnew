<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Treemap Charts")) ?>

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
                                <h4 class="header-title">Basic Treemap</h4>
                                <div dir="ltr">
                                    <div id="basic-treemap" class="apex-charts" data-colors="#39afd1"></div>
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
                                <h4 class="header-title">Treemap Multiple Series</h4>
                                <div dir="ltr">
                                    <div id="multiple-treemap" class="apex-charts" data-colors="#fa5c7c,#35b8e0"></div>
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
                                <h4 class="header-title">Distributed Treemap</h4>
                                <div dir="ltr">
                                    <div id="distributed-treemap" class="apex-charts"
                                        data-colors="#5b69bc,#10c469,#fa5c7c,#35b8e0,#39afd1,#ffc35a, #eef2f7, #313a46">
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
                                <h4 class="header-title">Color Range Treemap</h4>
                                <div dir="ltr">
                                    <div id="color-range-treemap" class="apex-charts" data-colors="#5b69bc,#39afd1">
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

    <!-- Apex Chart Treemap Demo js -->
    <script src="/js/components/chart-apex-treemap.js"></script>
    <!-- demo end -->

</body>

</html>