<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Sparklines Charts")) ?>

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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row" dir="ltr">
                                    <div class="col-md-4">
                                        <div id="spark1" class="apex-charts" data-colors="#5b69bc"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="spark2" class="apex-charts" data-colors="#f9c851"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="spark3" class="apex-charts" data-colors="#10c469"></div>
                                    </div>
                                </div>
                                <!-- end row -->

                            </div><!-- end card body-->

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="ps-3">Total Value</th>
                                                    <th>Percentage of Portfolio</th>
                                                    <th>Last 10 days</th>
                                                    <th>Volume</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="ps-3">$32,554</td>
                                                    <td>15%</td>
                                                    <td>
                                                        <div id="chart1" data-colors="#5b69bc"></div>
                                                    </td>
                                                    <td>
                                                        <div id="chart5" data-colors="#5b69bc"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-3">$23,533</td>
                                                    <td>7%</td>
                                                    <td>
                                                        <div id="chart2" data-colors="#10c469"></div>
                                                    </td>
                                                    <td>
                                                        <div id="chart6" data-colors="#10c469"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-3">$54,276</td>
                                                    <td>9%</td>
                                                    <td>
                                                        <div id="chart3" data-colors="#f9c851"></div>
                                                    </td>
                                                    <td>
                                                        <div id="chart7" data-colors="#f9c851"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-3">$11,533</td>
                                                    <td>2%</td>
                                                    <td>
                                                        <div id="chart4" data-colors="#fa5c7c"></div>
                                                    </td>
                                                    <td>
                                                        <div id="chart8" data-colors="#fa5c7c"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div><!-- end card -->
                    </div> <!-- end col-->
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

    <!-- Apex Chart Sparkline Demo js -->
    <script src="/js/components/chart-apex-sparklines.js"></script>

</body>

</html>