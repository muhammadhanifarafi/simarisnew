<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Bar Charts")) ?>

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
                                <h4 class="header-title">Basic Bar Chart</h4>
                                <div dir="ltr">
                                    <div id="basic-bar" class="apex-charts" data-colors="#39afd1"></div>
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
                                <h4 class="header-title">Grouped Bar Chart</h4>
                                <div dir="ltr">
                                    <div id="grouped-bar" class="apex-charts" data-colors="#fa5c7c,#35b8e0"></div>
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
                                <h4 class="header-title">Stacked Bar Chart</h4>
                                <div dir="ltr">
                                    <div id="stacked-bar" class="apex-charts"
                                        data-colors="#5b69bc,#10c469,#fa5c7c,#35b8e0,#39afd1"></div>
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
                                <h4 class="header-title">100% Stacked Bar Chart</h4>
                                <div dir="ltr">
                                    <div id="full-stacked-bar" class="apex-charts"
                                        data-colors="#f9c851,#39afd1,#35b8e0,#e3eaef,#5b69bc"></div>
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
                                <h4 class="header-title">Bar with Negative Values</h4>
                                <div dir="ltr">
                                    <div id="negative-bar" class="apex-charts" data-colors="#fa5c7c,#10c469"></div>
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
                                <h4 class="header-title">Reversed Bar Chart</h4>
                                <div dir="ltr">
                                    <div id="reversed-bar" class="apex-charts" data-colors="#5b69bc,#10c469"></div>
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
                                <h4 class="header-title">Bar with Image Fill</h4>
                                <div dir="ltr">
                                    <div id="image-fill-bar" class="apex-charts" data-colors="#5b69bc,#10c469,#e3eaef">
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
                                <h4 class="header-title">Custom DataLabels Bar</h4>
                                <div dir="ltr">
                                    <div id="datalables-bar" class="apex-charts"
                                        data-colors="#5b69bc,#10c469,#fa5c7c,#35b8e0,#39afd1,#2b908f,#f9c851,#90ee7e,#f48024,#212730">
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
                                <h4 class="header-title">Patterned Bar Chart</h4>
                                <div dir="ltr">
                                    <div id="pattern-bar" class="apex-charts"
                                        data-colors="#5b69bc,#10c469,#fa5c7c,#39afd1"></div>
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
                                <h4 class="header-title">Bar with Markers</h4>
                                <div dir="ltr">
                                    <div id="bar-markers" class="apex-charts" data-colors="#10c469,#fa5c7c"></div>
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

    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>

    <!-- Apex Chart Bar Demo js -->
    <script src="/js/components/chart-apex-bar.js"></script>

</body>

</html>