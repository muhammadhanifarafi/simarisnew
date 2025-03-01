<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "User Profile")) ?>

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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="bg-picture card-body">
                                <div class="d-flex align-items-top">
                                    <img src="/images/users/avatar-1.jpg"
                                        class="flex-shrink-0 rounded-circle avatar-xl img-thumbnail float-start me-3"
                                        alt="profile-image">

                                    <div class="flex-grow-1 overflow-hidden">
                                        <h4 class="m-0 lh-base">Nowak Helme</h4>
                                        <p class="text-muted"><i>Web Designer</i></p>
                                        <p>Hi, I'm a passionate and creative web designer with a keen eye for aesthetics and functionality. I specialize in crafting visually stunning and user-friendly websites that leave a lasting impression. With expertise in design tools, coding, and responsive layouts, I bring ideas to life, ensuring seamless experiences across devices.</p>

                                        <ul class="social-list list-inline mt-3 mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border border-primary text-primary rounded-circle p-1 fs-20 d-flex justify-content-center align-items-center"><i
                                                        class="ti ti-brand-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border border-danger text-danger rounded-circle p-1 fs-20 d-flex justify-content-center align-items-center"><i
                                                        class="ti ti-brand-google"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border border-info text-info rounded-circle p-1 fs-20 d-flex justify-content-center align-items-center"><i
                                                        class="ti ti-brand-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border border-secondary text-secondary rounded-circle p-1 fs-20 d-flex justify-content-center align-items-center"><i
                                                        class="ti ti-brand-github"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <form class="mb-4">
                                    <div class="input-group">
                                        <textarea rows="3" class="form-control" placeholder="Post a new message"></textarea>
                                        <button class="btn btn-primary btn-sm">Send</button>
                                    </div>

                                    <ul class="nav nav-pills bg-light bg-opacity-50 rounded-bottom mt-n1 pt-1 d-flex justify-content-start">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link fs-18 px-2 py-1"><i class="ti ti-user"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link fs-18 px-2 py-1"><i class="ti ti-send"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link fs-18 px-2 py-1"><i class="ti ti-camera"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link fs-18 px-2 py-1"><i class="ti ti-mood-smile"></i></a>
                                        </li>
                                    </ul>
                                </form>

                                <div class="d-flex align-items-top mb-2">
                                    <img src="/images/users/avatar-1.jpg" alt=""
                                        class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0"><a href="#" class="text-dark">Adam Jansen</a><small
                                                class="ms-1 text-muted">about 2 minutes ago</small></h5>
                                        <p>Story based around the idea of time lapse, animation to post soon!</p>
                                        <div>
                                            <a href="">
                                                <img src="/images/small/small-1.jpg" class="avatar-md rounded">
                                            </a>
                                            <a href="">
                                                <img src="/images/small/small-2.jpg" class="avatar-md rounded">
                                            </a>
                                            <a href="">
                                                <img src="/images/small/small-3.jpg" class="avatar-md rounded">
                                            </a>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center fs-14 pt-2 mb-3">
                                            <a href="#" class="text-muted"><i class="ti ti-thumb-up"></i></a>
                                            <a href="#" class="text-muted"><i class="ti ti-thumb-down"></i></a>
                                            <a href="#" class="text-muted">Reply</a>
                                        </div>

                                        <div class="d-flex align-items-top mb-2">
                                            <img src="/images/users/avatar-3.jpg" alt=""
                                                class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                            <div class="flex-grow-1">
                                                <h5 class="mt-0"><a href="#" class="text-dark">John Smith</a><small
                                                        class="ms-1 text-muted">about 1 hour ago</small></h5>
                                                <p>Wow impressive!</p>

                                                <div class="d-flex gap-2 align-items-center fs-14">
                                                    <a href="#" class="text-muted"><i class="ti ti-thumb-up"></i></a>
                                                    <a href="#" class="text-muted"><i class="ti ti-thumb-down"></i></a>
                                                    <a href="#" class="text-muted">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-top">
                                            <img src="/images/users/avatar-4.jpg" alt=""
                                                class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                            <div class="flex-grow-1">
                                                <h5 class="mt-0"><a href="#" class="text-dark">Matt Cheuvront</a><small
                                                        class="ms-1 text-muted">about 2 hours ago</small></h5>
                                                <p>Wow, that is really nice.</p>

                                                <div class="d-flex gap-2 align-items-center fs-14 mb-3">
                                                    <a href="#" class="text-muted"><i class="ti ti-thumb-up"></i></a>
                                                    <a href="#" class="text-muted"><i class="ti ti-thumb-down"></i></a>
                                                    <a href="#" class="text-muted">Reply</a>
                                                </div>

                                                <div class="d-flex align-items-top mb-2">
                                                    <img src="/images/users/avatar-5.jpg" alt=""
                                                        class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mt-0"><a href="#" class="text-dark">Stephanie
                                                                Walter</a><small class="ms-1 text-muted">about 3 hours
                                                                ago</small></h5>
                                                        <p>Nice work, makes me think of The Money Pit.</p>

                                                        <div class="d-flex gap-2 align-items-center fs-14">
                                                            <a href="#" class="text-muted"><i
                                                                    class="ti ti-thumb-up"></i></a>
                                                            <a href="#" class="text-muted"><i
                                                                    class="ti ti-thumb-down"></i></a>
                                                            <a href="#" class="text-muted">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-top mb-3">
                                    <img src="/images/users/avatar-6.jpg" alt=""
                                        class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0"><a href="#" class="text-dark">John Smith</a><small
                                                class="ms-1 text-muted">about 4 hours ago</small></h5>
                                        <p>I'm in the middle of a timelapse animation myself! (Very different though.)
                                            Awesome stuff.</p>

                                        <div class="d-flex gap-2 align-items-center fs-14">
                                            <a href="#" class="text-muted"><i class="ti ti-thumb-up"></i></a>
                                            <a href="#" class="text-muted"><i class="ti ti-thumb-down"></i></a>
                                            <a href="#" class="text-muted">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-top mb-3">
                                    <img src="/images/users/avatar-7.jpg" alt=""
                                        class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0"><a href="#" class="text-dark">Nicolai Larson</a><small
                                                class="ms-1 text-muted">about 10 hours ago</small></h5>
                                        <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                                        <div class="d-flex gap-2 align-items-center fs-14">
                                            <a href="#" class="text-muted"><i class="ti ti-thumb-up"></i></a>
                                            <a href="#" class="text-muted"><i class="ti ti-thumb-down"></i></a>
                                            <a href="#" class="text-muted">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <a href="" class="text-danger"><i class="ti ti-loader me-1"></i>
                                        Load more </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card  overflow-hidden">
                            <div
                                class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                <h4 class="header-title mb-0">My Team Members</h4>

                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group mb-0 list-group-flush">
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="/images/users/avatar-2.jpg" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <div>
                                            <h5 class="mb-0 lh-base"><a href="#!" class="text-reset">Michael Zenaty</a></h5>
                                            <p class="text-muted mb-0 fs-13">CEO</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="btn btn-sm btn-soft-primary">Contact</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="/images/users/avatar-3.jpg" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <div>
                                            <h5 class="mb-0 lh-base"><a href="#!" class="text-reset">Sarah Johnson</a></h5>
                                            <p class="text-muted mb-0 fs-13">Marketing Manager</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="btn btn-sm btn-soft-primary">Contact</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="/images/users/avatar-4.jpg" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <div>
                                            <h5 class="mb-0 lh-base"><a href="#!" class="text-reset">David Lee</a></h5>
                                            <p class="text-muted mb-0 fs-13">Software Developer</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="btn btn-sm btn-soft-primary">Contact</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="/images/users/avatar-5.jpg" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <div>
                                            <h5 class="mb-0 lh-base"><a href="#!" class="text-reset">Emily White</a></h5>
                                            <p class="text-muted mb-0 fs-13">Graphic Designer</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="btn btn-sm btn-soft-primary">Contact</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="/images/users/avatar-6.jpg" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <div>
                                            <h5 class="mb-0 lh-base"><a href="#!" class="text-reset">Chris Brown</a></h5>
                                            <p class="text-muted mb-0 fs-13">UI/UX Specialist</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="btn btn-sm btn-soft-primary">Contact</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="/images/users/avatar-7.jpg" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <div>
                                            <h5 class="mb-0 lh-base"><a href="#!" class="text-reset">Sophia Martinez</a></h5>
                                            <p class="text-muted mb-0 fs-13">Content Strategist</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="btn btn-sm btn-soft-primary">Contact</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card overflow-hidden">
                            <div
                                class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                <h4 class="header-title mb-0">Upcoming Reminders</h4>

                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group mb-0 list-group-flush">
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="me-1">
                                            <i class="ri-circle-fill text-primary"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Meet Manager</h5>
                                            <span class="text-muted fs-12 text-truncate d-block">February
                                                24, 2025 - 10:30am to 12:45pm</span>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="text-decoration-underline fw-semibold ms-auto link-offset-2">View <i class="ti ti-arrow"></i></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="me-1">
                                            <i class="ri-circle-fill text-success"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Team Stand-Up</h5>
                                            <span class="text-muted fs-12 text-truncate d-block">February 25, 2025 - 9:00am to 9:30am</span>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="text-decoration-underline fw-semibold ms-auto link-offset-2">View <i class="ti ti-arrow"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="me-1">
                                            <i class="ri-circle-fill text-danger"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Client Presentation</h5>
                                            <span class="text-muted fs-12 text-truncate d-block">February 26, 2025 - 2:00pm to 4:00pm</span>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="text-decoration-underline fw-semibold ms-auto link-offset-2">View <i class="ti ti-arrow"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="me-1">
                                            <i class="ri-circle-fill text-warning"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Project Kickoff</h5>
                                            <span class="text-muted fs-12 text-truncate d-block">February 27, 2025 - 11:00am to 1:00pm</span>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="text-decoration-underline fw-semibold ms-auto link-offset-2">View <i class="ti ti-arrow"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-light">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="me-1">
                                            <i class="ri-circle-fill text-info"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Monthly Review</h5>
                                            <span class="text-muted fs-12 text-truncate d-block">February 28, 2025 - 3:00pm to 5:00pm</span>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="text-decoration-underline fw-semibold ms-auto link-offset-2">View <i class="ti ti-arrow"></i></a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
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

</body>

</html>