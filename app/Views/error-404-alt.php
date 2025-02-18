<?= $this->include('partials/html') ?>

<head>
<?php echo view("partials/title-meta", array("title" => "Error 404")) ?>

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

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <img src="/images/error/error-404.png" height="230" alt="File not found Image">

                            <h4 class="text-uppercase text-danger mt-3">Page Not Found</h4>
                            <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. Don't worry...
                                it
                                happens to the best of us. Here's a
                                little tip that might help you get back on track.</p>

                            <a class="btn btn-info mt-3" href="index"><i class="ti ti-home me-1"></i> Return
                                Home</a>
                        </div> <!-- end /.text-center-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

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