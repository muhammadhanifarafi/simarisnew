<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Area Chart")) ?>

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
                                <h4 class="header-title mb-4">Basic Area Chart</h4>
                                <div dir="ltr">
                                    <div id="basic-area" class="apex-charts" data-colors="#ff5b5b"></div>
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
                                <h4 class="header-title mb-4">Spline Area</h4>
                                <div dir="ltr">
                                    <div id="spline-area" class="apex-charts" data-colors="#5b69bc,#35b8e0"></div>
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
                                <h4 class="header-title mb-4">Area Chart - Datetime X-axis</h4>
                                <div class="toolbar apex-toolbar">
                                    <button id="one_month" class="btn btn-sm btn-light">1M</button>
                                    <button id="six_months" class="btn btn-sm btn-light">6M</button>
                                    <button id="one_year" class="btn btn-sm btn-light active">1Y</button>
                                    <button id="ytd" class="btn btn-sm btn-light">YTD</button>
                                    <button id="all" class="btn btn-sm btn-light">ALL</button>
                                </div>
                                <div dir="ltr">
                                    <div id="area-chart-datetime" class="apex-charts" data-colors="#35b8e0"></div>
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
                                <h4 class="header-title mb-4">Area with Negative Values</h4>
                                <div dir="ltr">
                                    <div id="area-chart-negative" class="apex-charts" data-colors="#10c469,#f9c851">
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

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Selection - Github Style</h4>
                                <div dir="ltr">
                                    <div id="area-chart-github" class="apex-charts" data-colors="#7BD39A"></div>
                                    <div class="pt-2 pb-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img src="/images/users/avatar-2.jpg" class="avatar-xs rounded"
                                                    alt="file-image">
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">Coderthemes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="area-chart-github2" class="apex-charts" data-colors="#FF7F00"></div>
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
                                <h4 class="header-title mb-4">Stacked Area</h4>
                                <div dir="ltr">
                                    <div id="stacked-area" class="apex-charts" data-colors="#5b69bc,#10c469,#e3eaef">
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

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Irregular TimeSeries</h4>
                                <div dir="ltr">
                                    <div id="area-timeSeries" class="apex-charts" data-colors="#39afd1,#fa5c7c,#5b69bc">
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
                                <h4 class="header-title mb-4">Area Chart with Null values</h4>
                                <div dir="ltr">
                                    <div id="area-chart-nullvalues" class="apex-charts" data-colors="#39afd1"></div>
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

    <!-- Apex Charts js -->
    <script src="/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/vendor/moment/moment.js"></script>

    <!-- Apex Chart Area Demo js -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
    <script src="https://apexcharts.com/samples/assets/github-data.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>

    <!-- Apex Area Chart demo js -->
    <script src="/js/components/chart-apex-area.js"></script>

</body>

</html>