<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Task Details")) ?>

    <!-- dropzone css -->
    <link rel="stylesheet" href="/vendor/dropzone/dropzone.css" type="text/css" />

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
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mb-1">Adminto Admin Dashboard Re-design</h4>
                                        <p class="fw-semibold mb-0"><span class="badge bg-danger">Urgent</span> </p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill fs-18"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class='ti ti-paperclip me-1'></i>Attachment
                                            </a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class='ti ti-pencil me-1'></i>Edit
                                            </a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class='ti ti-copy me-1'></i>Mark as Duplicate
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                <i class='ti ti-trash me-1'></i>Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="d-flex align-items-start">
                                            <div class="me-2 align-self-center">
                                                <i class="ri-hashtag h2 m-0 text-muted"></i>
                                            </div>
                                            <div class="flex-1 overflow-hidden">
                                                <p class="mb-1 text-muted fs-12">Task ID</p>
                                                <h5 class="m-0 text-truncate">
                                                    #MN2048
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="d-flex align-items-start">
                                            <div class="me-2 align-self-center">
                                                <img src="/images/users/avatar-2.jpg" alt=""
                                                    class="avatar-sm rounded-circle">
                                            </div>
                                            <div class="flex-1 overflow-hidden">
                                                <p class="mb-1 text-muted fs-12">Assign to</p>
                                                <h5 class="m-0 text-truncate">
                                                    Darnell McCormick
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="d-flex align-items-start">
                                            <div class="me-2 align-self-center">
                                                <i class="ri-calendar-event-line h2 m-0 text-muted"></i>
                                            </div>
                                            <div class="flex-1 overflow-hidden">
                                                <p class="mb-1 text-muted fs-12">Due Date</p>
                                                <h5 class="m-0 text-truncate">
                                                    Today 10 AM
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div>
                                        <h5>Overview:</h5>
                                        <p class="text-muted">We've completely redesigned and enhanced our admin dashboard to provide a more intuitive, efficient, and user-friendly experience. With a modern interface, improved navigation, and responsive design, the new dashboard offers a seamless experience across all devices, ensuring smoother workflows and enhanced functionality for all users</p>
                                        <div class="mt-3">
                                            <h5>Tags :</h5>
                                            <div>
                                                <a href="#" class="badge badge-soft-primary p-1">Photoshop</a>
                                                <a href="#" class="badge badge-soft-primary p-1">Html</a>
                                                <a href="#" class="badge badge-soft-primary p-1">Css</a>
                                                <a href="#" class="badge badge-soft-primary p-1">Bootstrap</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <h5>Checklists/Sub-tasks</h5>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" id="checklistcheck01">
                                            <label class="form-check-label strikethrough" for="checklistcheck01">
                                                Find out the old contract documents
                                            </label>
                                        </div>

                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="checklistcheck02">
                                            <label class="form-check-label strikethrough" for="checklistcheck02">
                                                Organize meeting sales associates to understand need in detail
                                            </label>
                                        </div>

                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="checklistcheck03">
                                            <label class="form-check-label strikethrough" for="checklistcheck03">
                                                Make sure to cover every small details
                                            </label>
                                        </div>

                                        <!-- end sub tasks/checklists -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                <h5 class="header-title">Attachments</h5>
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class='ti ti-paperclip me-1'></i>Attachment
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class='ti ti-pencil me-1'></i>Edit
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class='ti ti-copy me-1'></i>Mark as Duplicate
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger">
                                            <i class='ti ti-trash me-1'></i>Delete
                                        </a>
                                    </div> <!-- end dropdown menu-->
                                </div> <!-- end dropdown-->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone"
                                                data-plugin="dropzone" data-previews-container="#file-previews"
                                                data-upload-preview-template="#uploadPreviewTemplate">
                                                <div class="fallback">
                                                    <input name="file" type="file" />
                                                </div>

                                                <div class="dz-message needsclick">
                                                    <i class="h2 text-muted ri-upload-2-line d-inline-block"></i>
                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mt-4 mt-md-0">
                                            <div class="card border mb-2">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                                <span
                                                                    class="avatar-title badge-soft-primary text-primary rounded">
                                                                    ZIP
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-0">
                                                            <a href="javascript:void(0);"
                                                                class="text-muted fw-semibold">Minton-sketch-design.zip</a>
                                                            <p class="mb-0 fs-12">2.3 MB</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Button -->
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-link fs-16 text-muted">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card border mb-0">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                                <span
                                                                    class="avatar-title bg-secondary rounded text-light">
                                                                    .MP4
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-0">
                                                            <a href="javascript:void(0);"
                                                                class="text-muted fw-semibold">Admin-bug-report.mp4</a>
                                                            <p class="mb-0 fs-12">7.05 MB</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Button -->
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-link fs-16 text-muted">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Preview -->
                                            <div class="dropzone-previews mt-2" id="file-previews"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                <h4 class="header-title">Comments (51)</h4>
                                <div>
                                    <select class="form-select form-select-sm">
                                        <option selected="">Recent</option>
                                        <option value="1">Most Helpful</option>
                                        <option value="2">High to Low</option>
                                        <option value="3">Low to High</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <img class="me-2 rounded-circle" src="/images/users/avatar-3.jpg"
                                        alt="Generic placeholder image" height="32">
                                    <div class="flex-1">
                                        <h5 class="mt-0">Barry Gould
                                            <small class="text-muted fw-normal float-end">5 hours ago</small>
                                        </h5>
                                        Nice work, makes me think of The Money Pit.

                                        <br />
                                        <a href="javascript: void(0);" class="text-muted fs-13 d-inline-block mt-2">
                                            <i class="ti ti-corner-up-left"></i> Reply
                                        </a>

                                        <div class="d-flex align-items-start mt-3">
                                            <a class="pe-2" href="#">
                                                <img src="/images/users/avatar-4.jpg" class="rounded-circle"
                                                    alt="Generic placeholder image" height="32">
                                            </a>
                                            <div class="flex-1">
                                                <h5 class="mt-0">Louis Hill
                                                    <small class="text-muted fw-normal float-end">3 hours ago</small>
                                                </h5>
                                                i'm in the middle of a timelapse animation myself! (Very different
                                                though.) Awesome stuff.

                                                <br />
                                                <a href="javascript: void(0);"
                                                    class="text-muted fs-13 d-inline-block mt-2">
                                                    <i class="ti ti-corner-up-left"></i> Reply
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mt-3">
                                    <img class="me-2 rounded-circle" src="/images/users/avatar-5.jpg"
                                        alt="Generic placeholder image" height="32">
                                    <div class="flex-1">
                                        <h5 class="mt-0">Aaron Wilson
                                            <small class="text-muted fw-normal float-end">1 day ago</small>
                                        </h5>
                                        It would be very nice to have.

                                        <br />
                                        <a href="javascript: void(0);" class="text-muted fs-13 d-inline-block mt-2">
                                            <i class="ti ti-corner-up-left"></i> Reply
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center mt-2">
                                    <a href="javascript:void(0);" class="text-danger">
                                        <i class="ti ti-loader ti-spin me-1"></i> Load more
                                    </a>
                                </div>

                                <div class="border rounded mt-4">
                                    <form action="#" class="comment-area-box">
                                        <textarea rows="3" class="form-control border-0 resize-none"
                                            placeholder="Your comment..."></textarea>
                                        <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#" class="btn btn-sm px-1 btn-light">
                                                    <i class="ti ti-upload"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm px-1 btn-light">
                                                    <i class="ti ti-at"></i>
                                                </a>
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-success">
                                                <i class="ti ti-send me-1"></i>Submit
                                            </button>
                                        </div>
                                    </form>
                                </div> <!-- end .border-->

                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                </div>
                <!-- end row -->

                <!-- file preview template -->
                <div class="d-none" id="uploadPreviewTemplate">
                    <div class="card mb-2 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                    <p class="mb-0" data-dz-size></p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                        <i class="fe-x"></i>
                                    </a>
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

    <!-- Dropzone File Upload js -->
    <script src="/vendor/dropzone/dropzone-min.js"></script>

    <!-- File Upload Demo js -->
    <script src="/js/components/form-fileupload.js"></script>

</body>

</html>