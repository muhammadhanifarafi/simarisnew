<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Kanban Board")) ?>

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

                <div class="d-flex gap-3 kanban-board" data-plugin="dragula" data-containers='["upcoming", "in-progress", "in-review", "completed"]'>
                    <div class="kanban-board-item">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill m-0 text-muted h3"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Add Members</a>
                                        <a class="dropdown-item" href="#">Add Due Date</a>
                                    </div>
                                </div> <!-- end dropdown -->

                                <h4 class="header-title mb-0">Upcoming</h4>
                            </div>

                            <div data-simplebar>
                                <div class="tasklist px-3" id="upcoming">
                                    <div class="card" id="task1">
                                        <div class="card-body">
                                            <span class="badge bg-soft-danger text-danger float-end">High</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Android App homepage</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Design the homepage layout for the Android application with a clean and user-friendly interface.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Oct 16, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-1.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-3.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" id="task2">
                                        <div class="card-body">
                                            <span class="badge bg-soft-success text-success float-end">Low</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Dashboard layout improvements</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Improve the layout and responsiveness of the main dashboard to enhance user experience.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Nov 22, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-2.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" id="task3">
                                        <div class="card-body">
                                            <span class="badge bg-soft-danger text-danger float-end">High</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Invite team members to the project</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Send invites to new team members for the upcoming project launch and onboarding.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Oct 15, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-5.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card task-info" id="task4">
                                        <div class="card-body">
                                            <span class="badge bg-soft-warning text-warning float-end">Medium</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Prepare user guide for the new feature</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Prepare a comprehensive user guide for the newly added feature in the app.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Dec 03, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-6.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-7.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <a href="javascript: void(0);" class="btn btn-primary w-100"><i class="ri-add-line"></i> Add New</a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="kanban-board-item">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill m-0 text-muted h3"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Add Members</a>
                                        <a class="dropdown-item" href="#">Add Due Date</a>
                                    </div>
                                </div> <!-- end dropdown -->

                                <h4 class="header-title mb-0">In Progress</h4>
                            </div>

                            <div data-simplebar>
                                <div class="tasklist px-3" id="in-progress">
                                    <div class="card" id="task6">
                                        <div class="card-body">
                                            <span class="badge bg-soft-warning text-warning float-end">Medium</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Set up user authentication</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Integrate user authentication using OAuth 2.0 for secure login functionality.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Sep 18, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-8.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card task-info" id="task7">
                                        <div class="card-body">
                                            <span class="badge bg-soft-danger text-danger float-end">High</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Design the user dashboard</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Design a clean and interactive user dashboard for easy navigation and data visualization.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Oct 30, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-9.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-10.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card task-danger" id="task8">
                                        <div class="card-body">
                                            <span class="badge bg-soft-success text-success float-end">Low</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Create promotional email template</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Design a responsive HTML email template for a new promotional campaign.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Nov 23, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-1.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-3.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <a href="javascript: void(0);" class="btn btn-primary w-100 "><i class="ri-add-line"></i> Add New</a>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="kanban-board-item">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill m-0 text-muted h3"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Add Members</a>
                                        <a class="dropdown-item" href="#">Add Due Date</a>
                                    </div>
                                </div> <!-- end dropdown -->

                                <h4 class="header-title mb-0">In Review</h4>
                            </div>

                            <div data-simplebar>
                                <div class="tasklist px-3" id="in-review">
                                    <div class="card" id="task9">
                                        <div class="card-body">
                                            <span class="badge bg-soft-warning text-warning float-end">Medium</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Set up tracking for user interactions</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Implement tracking for user interactions on the website to analyze user behavior.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Sep 18, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-8.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card task-info" id="task10">
                                        <div class="card-body">
                                            <span class="badge bg-soft-danger text-danger float-end">High</span>
                                            <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Design new project management interface</a></h5>
                                            <div class="form-check float-end ps-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                            <p>Design and implement a clean and user-friendly interface for managing projects in the system.</p>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i> Oct 30, 2025</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-end">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-9.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <img src="/images/users/avatar-10.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <a href="javascript: void(0);" class="btn btn-primary w-100 "><i class="ri-add-line"></i> Add New</a>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="kanban-board-item">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill m-0 text-muted h3"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Add Members</a>
                                        <a class="dropdown-item" href="#">Add Due Date</a>
                                    </div>
                                </div> <!-- end dropdown -->

                                <h4 class="header-title mb-0">Completed</h4>
                            </div>

                            <div data-simplebar>
                                <div data-simplebar>
                                    <div class="tasklist px-3" id="completed">
                                        <div class="card task-warning" id="task11">
                                            <div class="card-body">
                                                <span class="badge bg-soft-success text-success float-end">Low</span>
                                                <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Brand logo design</a></h5>
                                                <div class="form-check float-end ps-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                                <p>Various versions have evolved over the years, sometimes by accident.</p>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i>
                                                            Jun 13, 2025</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="text-end">
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <img src="/images/users/avatar-3.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card task-success" id="task12">
                                            <div class="card-body">
                                                <span class="badge bg-soft-warning text-warning float-end">Medium</span>
                                                <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Improve animation loader</a></h5>
                                                <div class="form-check float-end ps-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                                <p>A handful of model sentence structures, to generate Lorem Ipsum which
                                                    looks
                                                    reasonable.</p>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i>
                                                            Oct 16, 2025</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="text-end">
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <img src="/images/users/avatar-4.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                            </a>
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <img src="/images/users/avatar-7.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card" id="task13">
                                            <div class="card-body">
                                                <span class="badge bg-soft-danger text-danger float-end">High</span>
                                                <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">Dashboard Re-design</a></h5>
                                                <div class="form-check float-end ps-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i>
                                                            Oct 16, 2025</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="text-end">
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <img src="/images/users/avatar-5.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                            </a>
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <img src="/images/users/avatar-9.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card task-info" id="task14">
                                            <div class="card-body">
                                                <span class="badge bg-soft-success text-success float-end">Low</span>
                                                <h5 class="mt-0"><a href="apps-task-details" class="text-dark fw-semibold">iOS App home page</a></h5>
                                                <div class="form-check float-end ps-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                                <p>you need to be sure there isn't anything embarrassing hidden in the
                                                    middle of
                                                    text.</p>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="fs-13 mt-2 mb-0"><i class="ri-calendar-event-line me-1"></i>
                                                            Oct 16, 2025</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="text-end">
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <img src="/images/users/avatar-10.jpg" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <a href="javascript: void(0);" class="btn btn-primary w-100 "><i class="ri-add-line"></i> Add New</a>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- container -->

            <?= $this->include('partials/footer') ?>

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('partials/customizer') ?>

    <!-- Dragula js-->
    <script src="/vendor/dragula/dragula.min.js"></script>

    <!-- Custom js -->
    <script src="/js/pages/apps-kanban.js"></script>

    <?= $this->include('partials/footer-scripts') ?>

</body>

</html>