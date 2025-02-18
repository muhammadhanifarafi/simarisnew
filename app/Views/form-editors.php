<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Editors")) ?>

    <!-- Quill css -->
    <link href="/vendor/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/quill/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/quill/quill.bubble.css" rel="stylesheet" type="text/css" />

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

                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Quill Editor</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">Snow is a clean, flat toolbar theme.</p>

                        <div id="snow-editor" style="height: 300px;">
                            <h3><span class="ql-size-large">Hello World!</span></h3>
                            <p><br></p>
                            <h3>This is an simple editable area.</h3>
                            <p><br></p>
                            <ul>
                                <li>
                                    Select a text to reveal the toolbar.
                                </li>
                                <li>
                                    Edit rich document on-the-fly, so elastic!
                                </li>
                            </ul>
                            <p><br></p>
                            <p>
                                End of simple area
                            </p>
                        </div><!-- end Snow-editor-->
                    </div>
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Bubble Editor</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">Bubble is a simple tooltip based theme.</p>

                        <div id="bubble-editor" style="height: 300px;">
                            <h3><span class="ql-size-large">Hello World!</span></h3>
                            <p><br></p>
                            <h3>This is an simple editable area.</h3>
                            <p><br></p>
                            <ul>
                                <li>
                                    Select a text to reveal the toolbar.
                                </li>
                                <li>
                                    Edit rich document on-the-fly, so elastic!
                                </li>
                            </ul>
                            <p><br></p>
                            <p>
                                End of simple area
                            </p>
                        </div> <!-- end Snow-editor-->
                    </div>
                </div> <!-- end card-->

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

    <!-- Quill Editor js -->
    <script src="/vendor/quill/quill.js"></script>

    <!-- Quill Demo js -->
    <script src="/js/components/form-quilljs.js"></script>

</body>

</html>