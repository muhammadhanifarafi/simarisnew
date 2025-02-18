<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Leaflet Maps")) ?>

    <!-- leaflet Css -->
    <link href="/vendor/leaflet/leaflet.css" rel="stylesheet" type="text/css" />

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
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Basic Map</h4>
                            </div>

                            <div class="card-body">
                                <div class="leaflet-map" id="basicMap"></div>
                            </div>
                        </div> <!-- end card-->
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Marker Circle & Polygon</h4>
                            </div>

                            <div class="card-body">
                                <div class="leaflet-map" id="shapeMap"></div>
                            </div>
                        </div> <!-- end card-->
                    </div>



                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Draggable Marker With Popup</h4>
                            </div>

                            <div class="card-body">
                                <div class="leaflet-map" id="dragMap"></div>
                            </div>
                        </div> <!-- end card-->
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">User Location</h4>
                            </div>

                            <div class="card-body">
                                <div class="leaflet-map" id="userLocation"></div>
                            </div>
                        </div> <!-- end card-->
                    </div>


                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Custom Icons</h4>
                            </div>

                            <div class="card-body">
                                <div class="leaflet-map" id="customIcons"></div>
                            </div>
                        </div> <!-- end card-->
                    </div>


                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Layer Control</h4>
                            </div>

                            <div class="card-body">
                                <div class="leaflet-map" id="layerControl"></div>
                            </div>
                        </div> <!-- end card-->
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Interactive Choropleth Map</h4>
                            </div>

                            <div class="card-body">
                                <div class="leaflet-map" id="geoJson"></div>
                            </div>
                        </div> <!-- end card-->
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

    <!-- leaflet plugin -->
    <script src="/vendor/leaflet/leaflet.js"></script>

    <!-- leaflet map -->
    <script src="/js/maps/leaflet-data.js"></script>
    <script src="/js/components/maps-leaflet.js"></script>

</body>

</html>