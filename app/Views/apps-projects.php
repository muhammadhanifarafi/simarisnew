<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Projects")) ?>

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
                            <div class="card-header justify-content-between d-sm-flex gap-2">
                                <a href="javascript:void(0);" class="btn btn-secondary mb-sm-0 mb-2">
                                    <i class="ti ti-circle-plus fs-20 me-2"></i> Create Project
                                </a>

                                <form class="row g-2 align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex">
                                            <label class="d-flex align-items-center fw-semibold">Phase </label>
                                            <select class="form-select d-inline-block ms-2">
                                                <option>All Projects(6)</option>
                                                <option>Complated</option>
                                                <option>Progress</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex">
                                            <label class="d-flex align-items-center fw-semibold">Sort</label>
                                            <select class="form-select d-inline-block ms-2">
                                                <option>Date</option>
                                                <option>Name</option>
                                                <option>End date</option>
                                                <option>Start Date</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Search Input -->
                                        <div class="d-flex align-items-start flex-wrap">
                                            <label for="membersearch-input" class="visually-hidden">Search</label>
                                            <input type="search" class="form-control border-light bg-light bg-opacity-50" id="membersearch-input"
                                                placeholder="Search...">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mt-0"><a href="" class="text-dark">New Admin Design</a></h4>
                                        <p class="text-success text-uppercase fw-semibold fs-11">Web Design</p>
                                    </div>
                                    <div>
                                        <div class="badge badge-soft-success p-1">Completed</div>
                                    </div>
                                </div>

                                <p class="text-muted mb-3">Create a user-friendly e-commerce platform with a sleek design, intuitive navigation, and responsive layouts to enhance.. <a href="#"
                                        class="link-dark">View more</a>
                                </p>

                                <ul class="list-inline">
                                    <li class="list-inline-item me-4">
                                        <h4 class="mb-0 lh-base">56</h4>
                                        <p class="text-muted">Questions</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h4 class="mb-0 lh-base">452</h4>
                                        <p class="text-muted">Comments</p>
                                    </li>
                                </ul>

                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="me-3 mb-0">Team :</h5>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Mat Helme" data-bs-original-title="Mat Helme">
                                            <img src="/images/users/avatar-1.jpg" class="rounded-circle avatar-sm"
                                                alt="friend">
                                        </a>

                                        <a href="#" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Michael Zenaty" data-bs-original-title="Michael Zenaty">
                                            <img src="/images/users/avatar-2.jpg" class="rounded-circle avatar-sm"
                                                alt="friend">
                                        </a>

                                        <a href="#" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="James Anderson" data-bs-original-title="James Anderson">
                                            <img src="/images/users/avatar-3.jpg" class="rounded-circle avatar-sm"
                                                alt="friend">
                                        </a>

                                        <a href="#" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Mat Helme" data-bs-original-title="Mat Helme">
                                            <img src="/images/users/avatar-4.jpg" class="rounded-circle avatar-sm"
                                                alt="friend">
                                        </a>
                                    </div>
                                </div>

                                <h5 class="mb-2">Progress <span class="text-success float-end">80%</span></h5>

                                <div class="progress progress-soft progress-sm">
                                    <div class="progress-bar bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mt-0"><a href="" class="text-dark">Corporate Website Redesign</a></h4>
                                        <p class="text-primary text-uppercase fw-semibold fs-11">Web Design</p>
                                    </div>
                                    <div>
                                        <div class="badge badge-soft-primary p-1">In Progress</div>
                                    </div>
                                </div>

                                <p class="text-muted mb-3">Enhance the corporate branding with a modern and professional redesign that aligns with business goals.. <a href="#" class="link-dark">View more</a></p>

                                <ul class="list-inline">
                                    <li class="list-inline-item me-4">
                                        <h4 class="mb-0 lh-base">34</h4>
                                        <p class="text-muted">Questions</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h4 class="mb-0 lh-base">210</h4>
                                        <p class="text-muted">Comments</p>
                                    </li>
                                </ul>

                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="me-3 mb-0">Team :</h5>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Sarah Taylor">
                                            <img src="/images/users/avatar-5.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Chris Miller">
                                            <img src="/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                    </div>
                                </div>

                                <h5 class="mb-2">Progress <span class="text-primary float-end">60%</span></h5>
                                <div class="progress progress-soft progress-sm">
                                    <div class="progress-bar bg-primary" style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mt-0"><a href="" class="text-dark">Portfolio Website</a></h4>
                                        <p class="text-info text-uppercase fw-semibold fs-11">Web Design</p>
                                    </div>
                                    <div>
                                        <div class="badge badge-soft-info p-1">In Review</div>
                                    </div>
                                </div>

                                <p class="text-muted mb-3">Design an elegant and responsive portfolio to showcase creative projects with stunning visuals.. <a href="#" class="link-dark">View more</a></p>

                                <ul class="list-inline">
                                    <li class="list-inline-item me-4">
                                        <h4 class="mb-0 lh-base">12</h4>
                                        <p class="text-muted">Questions</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h4 class="mb-0 lh-base">75</h4>
                                        <p class="text-muted">Comments</p>
                                    </li>
                                </ul>

                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="me-3 mb-0">Team :</h5>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Emily Clark">
                                            <img src="/images/users/avatar-7.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Chris Miller">
                                            <img src="/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Chris Miller">
                                            <img src="/images/users/avatar-9.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                    </div>
                                </div>

                                <h5 class="mb-2">Progress <span class="text-info float-end">90%</span></h5>
                                <div class="progress progress-soft progress-sm">
                                    <div class="progress-bar bg-info" style="width: 90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->

                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mt-0"><a href="" class="text-dark">E-Learning Platform</a></h4>
                                        <p class="text-warning text-uppercase fw-semibold fs-11">Web Design</p>
                                    </div>
                                    <div>
                                        <div class="badge badge-soft-warning p-1">Pending</div>
                                    </div>
                                </div>

                                <p class="text-muted mb-3">Develop a user-friendly platform to deliver online courses, with a focus on accessibility and engagement.. <a href="#" class="link-dark">View more</a></p>

                                <ul class="list-inline">
                                    <li class="list-inline-item me-4">
                                        <h4 class="mb-0 lh-base">28</h4>
                                        <p class="text-muted">Questions</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h4 class="mb-0 lh-base">150</h4>
                                        <p class="text-muted">Comments</p>
                                    </li>
                                </ul>

                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="me-3 mb-0">Team :</h5>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="John Doe">
                                            <img src="/images/users/avatar-8.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Sarah Parker">
                                            <img src="/images/users/avatar-9.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Chris Miller">
                                            <img src="/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                    </div>
                                </div>

                                <h5 class="mb-2">Progress <span class="text-warning float-end">45%</span></h5>
                                <div class="progress progress-soft progress-sm">
                                    <div class="progress-bar bg-warning" style="width: 45%" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mt-0"><a href="" class="text-dark">Travel Agency Portal</a></h4>
                                        <p class="text-danger text-uppercase fw-semibold fs-11">Web Development</p>
                                    </div>
                                    <div>
                                        <div class="badge badge-soft-danger p-1">Delayed</div>
                                    </div>
                                </div>

                                <p class="text-muted mb-3">Design an intuitive portal for a travel agency to manage bookings and provide seamless customer experiences.. <a href="#" class="link-dark">View more</a></p>

                                <ul class="list-inline">
                                    <li class="list-inline-item me-4">
                                        <h4 class="mb-0 lh-base">12</h4>
                                        <p class="text-muted">Questions</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h4 class="mb-0 lh-base">98</h4>
                                        <p class="text-muted">Comments</p>
                                    </li>
                                </ul>

                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="me-3 mb-0">Team :</h5>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Anna Brown">
                                            <img src="/images/users/avatar-10.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="David Smith">
                                            <img src="/images/users/avatar-8.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Chris Miller">
                                            <img src="/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Chris Miller">
                                            <img src="/images/users/avatar-1.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Chris Miller">
                                            <img src="/images/users/avatar-7.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                    </div>
                                </div>

                                <h5 class="mb-2">Progress <span class="text-danger float-end">30%</span></h5>
                                <div class="progress progress-soft progress-sm">
                                    <div class="progress-bar bg-danger" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mt-0"><a href="" class="text-dark">Healthcare Portal</a></h4>
                                        <p class="text-secondary text-uppercase fw-semibold fs-11">Web Design</p>
                                    </div>
                                    <div>
                                        <div class="badge badge-soft-secondary p-1">On Hold</div>
                                    </div>
                                </div>

                                <p class="text-muted mb-3">Create a healthcare portal offering appointment scheduling, patient records, and responsive communication tools.. <a href="#" class="link-dark">View more</a></p>

                                <ul class="list-inline">
                                    <li class="list-inline-item me-4">
                                        <h4 class="mb-0 lh-base">18</h4>
                                        <p class="text-muted">Questions</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h4 class="mb-0 lh-base">102</h4>
                                        <p class="text-muted">Comments</p>
                                    </li>
                                </ul>

                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="me-3 mb-0">Team :</h5>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar" data-bs-toggle="tooltip" aria-label="Mike Johnson">
                                            <img src="/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="friend">
                                        </a>
                                    </div>
                                </div>

                                <h5 class="mb-2">Progress <span class="text-secondary float-end">25%</span></h5>
                                <div class="progress progress-soft progress-sm">
                                    <div class="progress-bar bg-secondary" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->

                </div>
                <!-- end row -->

                <div class="row align-items-center mb-3">
                    <div class="col-sm-6">
                        <div>
                            <p class="fs-14 m-0 text-body text-muted">Showing <span class="text-body fw-semibold">6</span> Of <span class="text-body fw-semibold">52</span> projects</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <ul class="pagination pagination-boxed mb-sm-0">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
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