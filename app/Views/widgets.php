<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Widgets")) ?>

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

                <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Total Orders</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body pt-0">
                                <div class="d-flex align-items-end gap-2 justify-content-between">
                                    <div class="text-end flex-shrink-0">
                                        <div id="chart-one" data-colors="#ff5b5b,#F6F7FB"></div>
                                    </div>
                                    <div class="text-end">
                                        <h3 class="fw-semibold">687.3k</h3>
                                        <p class="text-muted mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">New Users</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body pt-0">
                                <div class="d-flex align-items-end gap-2 justify-content-between">
                                    <div class="text-end flex-shrink-0">
                                        <div id="chart-two" data-colors="#f9c851,#F6F7FB"></div>
                                    </div>
                                    <div class="text-end">
                                        <h3 class="fw-semibold">45.3k</h3>
                                        <p class="text-muted mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Total Orders</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body pt-0">
                                <div class="d-flex align-items-end gap-2 justify-content-between">
                                    <div class="text-end flex-shrink-0">
                                        <div id="chart-three" data-colors="#ff5b5b,#F6F7FB"></div>
                                    </div>
                                    <div class="text-end">
                                        <h3 class="fw-semibold">687.3k</h3>
                                        <p class="text-muted mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">New Users</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body pt-0">
                                <div class="d-flex align-items-end gap-2 justify-content-between">
                                    <div class="text-end flex-shrink-0">
                                        <div id="chart-four" data-colors="#f9c851,#F6F7FB"></div>
                                    </div>
                                    <div class="text-end">
                                        <h3 class="fw-semibold">45.3k</h3>
                                        <p class="text-muted mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Total Revenue</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body pt-0">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <span class="badge bg-success rounded-pill fs-13">32% <i class="ti ti-trending-up"></i> </span>
                                    <div class="text-end">
                                        <h3 class="fw-semibold">$5.42M</h3>
                                        <p class="text-muted mb-0">Since last month</p>
                                    </div>
                                </div>

                                <div class="progress progress-soft progress-sm mt-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->


                    <div class="col">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Customer Satisfaction</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body pt-0">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <span class="badge bg-info rounded-pill fs-13">5.7% <i class="ti ti-trending-down"></i> </span>
                                    <div class="text-end">
                                        <h3 class="fw-semibold">94.3%</h3>
                                        <p class="text-muted mb-0">Since last month</p>
                                    </div>
                                </div>

                                <div class="progress progress-soft progress-sm mt-3">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 94.3%" aria-valuenow="94.3" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Total Revenue</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body pt-0">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <span class="badge bg-success rounded-pill fs-13">32% <i class="ti ti-trending-up"></i> </span>
                                    <div class="text-end">
                                        <h3 class="fw-semibold">$5.42M</h3>
                                        <p class="text-muted mb-0">Since last month</p>
                                    </div>
                                </div>

                                <div class="progress progress-soft progress-sm mt-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Customer Satisfaction</h4>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body pt-0">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <span class="badge bg-info rounded-pill fs-13">5.7% <i class="ti ti-trending-down"></i> </span>
                                    <div class="text-end">
                                        <h3 class="fw-semibold">94.3%</h3>
                                        <p class="text-muted mb-0">Since last month</p>
                                    </div>
                                </div>

                                <div class="progress progress-soft progress-sm mt-3">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 94.3%" aria-valuenow="94.3" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-2">
                                <img src="/images/users/avatar-4.jpg" alt="team-member-image" class="me-1 avatar-xl img-thumbnail rounded-circle">
                                <div>
                                    <h5>Jane Doe</h5>
                                    <p class="text-muted">UI/UX Designer</p>
                                    <p class="m-0 fs-14">90+ Feedbacks <a href="#!" class="link-reset fw-medium"><i class="ti ti-arrow-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-2">
                                <img src="/images/users/avatar-5.jpg" alt="team-member-image" class="me-1 avatar-xl img-thumbnail rounded-circle">
                                <div>
                                    <h5>Emily Brown</h5>
                                    <p class="text-muted">Software Engineer</p>
                                    <p class="m-0 fs-14">100+ Feedbacks <a href="#!" class="link-reset fw-medium"><i class="ti ti-arrow-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-2">
                                <img src="/images/users/avatar-6.jpg" alt="team-member-image" class="me-1 avatar-xl img-thumbnail rounded-circle">
                                <div>
                                    <h5>Mark Wilson</h5>
                                    <p class="text-muted">Marketing Specialist</p>
                                    <p class="m-0 fs-14">70+ Feedbacks <a href="#!" class="link-reset fw-medium"><i class="ti ti-arrow-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-2">
                                <img src="/images/users/avatar-3.jpg" alt="team-member-image" class="me-1 avatar-xl img-thumbnail rounded-circle">
                                <div>
                                    <h5>Sara Johnson</h5>
                                    <p class="text-muted">Data Analyst</p>
                                    <p class="m-0 fs-14">50+ Feedbacks <a href="#!" class="link-reset fw-medium"><i class="ti ti-arrow-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="text-center">
                                    <h2 class="fw-normal text-primary" data-plugin="counterup">6599</h2>
                                    <p class="mb-0 fw-semibold">Statistics</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="text-center">
                                    <h2 class="text-danger" data-plugin="counterup">5894</h2>
                                    <p class="mb-0 fw-semibold">Total Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="text-center">
                                    <h2 class="fw-semibold text-warning" data-plugin="counterup">452</h2>
                                    <p class="mb-0 fw-semibold">Sales Analytics</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="text-center">
                                    <h2 class="fw-bold text-info" data-plugin="counterup">1254</h2>
                                    <p class="mb-0 fw-semibold">Daily Sales</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card  overflow-hidden">
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                <h4 class="header-title mb-0">My Team Members</h4>

                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <img src="/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
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
                                            <img src="/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
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
                                            <img src="/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
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
                                            <img src="/images/users/avatar-6.jpg" alt="" class="img-fluid rounded-circle">
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
                                            <img src="/images/users/avatar-7.jpg" alt="" class="img-fluid rounded-circle">
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
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="text-center card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <div>
                                    <img src="/images/users/avatar-9.jpg" class="rounded-circle avatar-xl img-thumbnail mb-3" alt="profile-image">

                                    <p class="text-muted fs-13 mb-4">
                                        Hi, I'm a passionate and creative web designer with a keen eye for aesthetics and functionality.
                                    </p>

                                    <div class="text-start">
                                        <p class="text-muted fs-13"><strong>Full Name :</strong> <span class="ms-2">Johnathan Deo</span></p>

                                        <p class="text-muted fs-13"><strong>Mobile :</strong><span class="ms-2">(123)
                                                123 1234</span></p>

                                        <p class="text-muted fs-13"><strong>Email :</strong> <span class="ms-2">coderthemes@gmail.com</span></p>

                                        <p class="text-muted fs-13"><strong>Location :</strong> <span class="ms-2">USA</span></p>
                                    </div>

                                    <ul class="list-inline mt-2 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                <h4 class="header-title mb-0">Progress Bars</h4>

                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="card-body">
                                <h5 class="mt-0">iMacs <span class="text-primary float-end">80%</span></h5>
                                <div class="progress progress-soft progress-sm mt-0 mb-3">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    </div>
                                </div>

                                <h5 class="mt-0">iBooks <span class="text-secondary float-end">50%</span></h5>
                                <div class="progress progress-soft progress-sm mt-0 mb-3">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    </div><!-- /.progress-bar .progress-bar-secondary -->
                                </div>

                                <h5 class="mt-0">iPhone 5s <span class="text-info float-end">70%</span></h5>
                                <div class="progress progress-soft progress-sm mt-0 mb-3">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    </div><!-- /.progress-bar .progress-bar-info -->
                                </div>

                                <h5 class="mt-0">iPhone 6 <span class="text-warning float-end">65%</span></h5>
                                <div class="progress progress-soft progress-sm mt-0 mb-3">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                    </div><!-- /.progress-bar .progress-bar-warning -->
                                </div>

                                <h5 class="mt-0">iPhone 4 <span class="text-danger float-end">65%</span></h5>
                                <div class="progress progress-soft progress-sm mt-0 mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                    </div><!-- /.progress-bar .progress-bar-warning -->
                                </div>

                                <h5 class="mt-0">iPhone 6s <span class="text-success float-end">40%</span></h5>
                                <div class="progress progress-soft progress-sm mt-0">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    </div><!-- /.progress-bar .progress-bar-success -->
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                <h4 class="header-title mb-0">Upcoming Reminders</h4>

                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
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
                        </div> <!-- end card-->

                    </div> <!-- end col-->
                </div> <!-- end row-->

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

    <!-- Widgets js -->
    <script src="/js/pages/widgets.js"></script>

</body>

</html>