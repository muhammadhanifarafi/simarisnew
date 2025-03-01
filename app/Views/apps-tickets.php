<?= $this->include('partials/html') ?>

<head>
<?php echo view("partials/title-meta", array("title" => "Tickets")) ?>

    <!-- Datatables css -->
    <link href="/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />

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
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Manage Tickets</h4>
                                </div>
                                <div class="d-flex flex-wrap gap-1">
                                    <button type="button" class="btn btn-light btn-sm">
                                        All
                                    </button>
                                    <button type="button" class="btn btn-light active btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-light btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-light btn-sm">
                                        1Y
                                    </button>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div>
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card text-bg-secondary">
                                                <div class="card-body d-flex align-items-center gap-2">
                                                    <iconify-icon icon="solar:ticket-sale-bold-duotone"
                                                        class="display-5"></iconify-icon>
                                                    <div>
                                                        <h3 class="text-white fw-bold">25563</h3>
                                                        <p class="text-uppercase fs-13 fw-semibold mb-0">Total tickets
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card text-bg-success">
                                                <div class="card-body d-flex align-items-center gap-2">
                                                    <iconify-icon icon="solar:ticket-sale-bold-duotone"
                                                        class="display-5"></iconify-icon>
                                                    <div>
                                                        <h3 class="text-white fw-bold">6952</h3>
                                                        <p class="text-uppercase fs-13 fw-semibold mb-0">Pending tickets
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card text-bg-primary">
                                                <div class="card-body d-flex align-items-center gap-2">
                                                    <iconify-icon icon="solar:ticket-sale-bold-duotone"
                                                        class="display-5"></iconify-icon>
                                                    <div>
                                                        <h3 class="text-white fw-bold">18361</h3>
                                                        <p class="text-uppercase fs-13 fw-semibold mb-0">Closed tickets
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card text-bg-danger">
                                                <div class="card-body d-flex align-items-center gap-2">
                                                    <iconify-icon icon="solar:ticket-sale-bold-duotone"
                                                        class="display-5"></iconify-icon>
                                                    <div>
                                                        <h3 class="text-white fw-bold">250</h3>
                                                        <p class="text-uppercase fs-13 fw-semibold mb-0">Deleted tickets
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>


                                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100"
                                    id="tickets-table">
                                    <thead class="bg-light bg-opacity-25">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>Requested By</th>
                                            <th>Subject</th>
                                            <th>Assignee</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Due Date</th>
                                            <th class="hidden-sm">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><b>#1256</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-2.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">George Llanes</span>
                                                </a>
                                            </td>

                                            <td> Support for theme </td>

                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-10.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Lauren Deo</span>
                                                </a>
                                            </td>

                                            <td> <span class="badge bg-secondary-subtle text-secondary">Low</span> </td>

                                            <td> <span class="badge bg-success">Open</span> </td>

                                            <td> 23 Dec, 2024 </td>

                                            <td> 25 Dec, 2024 </td>

                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1257</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-3.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Alex Morgan</span>
                                                </a>
                                            </td>
                                            <td> Bug in checkout </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-9.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Maria Garcia</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-warning-subtle text-warning">Medium</span> </td>
                                            <td> <span class="badge bg-danger">Pending</span> </td>
                                            <td> 23 Dec, 2024 </td>
                                            <td> 26 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#1258</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-4.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Chris Evans</span>
                                                </a>
                                            </td>
                                            <td> Feature request </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-8.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Emily Stone</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-primary-subtle text-primary">High</span> </td>
                                            <td> <span class="badge bg-success">Open</span> </td>
                                            <td> 22 Dec, 2024 </td>
                                            <td> 27 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#1259</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-5.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Emma Watson</span>
                                                </a>
                                            </td>
                                            <td> Login issue </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-7.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Oliver Twist</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-secondary-subtle text-secondary">Low</span> </td>
                                            <td> <span class="badge bg-danger">Pending</span> </td>
                                            <td> 21 Dec, 2024 </td>
                                            <td> 25 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#1260</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-6.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Sophia Lee</span>
                                                </a>
                                            </td>
                                            <td> Payment gateway error </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-1.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">William Brown</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-primary-subtle text-primary">High</span> </td>
                                            <td> <span class="badge bg-success">Resolved</span> </td>
                                            <td> 20 Dec, 2024 </td>
                                            <td> 23 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1261</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-7.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Isabella Taylor</span>
                                                </a>
                                            </td>
                                            <td> UI enhancement request </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-2.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Liam Davis</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-warning-subtle text-warning">Medium</span> </td>
                                            <td> <span class="badge bg-success">In Progress</span> </td>
                                            <td> 19 Dec, 2024 </td>
                                            <td> 24 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#1262</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-8.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">James Wilson</span>
                                                </a>
                                            </td>
                                            <td> Data sync failure </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-3.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Ava Johnson</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-primary-subtle text-primary">High</span> </td>
                                            <td> <span class="badge bg-danger">Pending</span> </td>
                                            <td> 18 Dec, 2024 </td>
                                            <td> 23 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#1263</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-9.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Mia Moore</span>
                                                </a>
                                            </td>
                                            <td> Account suspension inquiry </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-4.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Noah White</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-secondary-subtle text-secondary">Low</span> </td>
                                            <td> <span class="badge bg-success">Resolved</span> </td>
                                            <td> 17 Dec, 2024 </td>
                                            <td> 22 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1264</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-10.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Liam Smith</span>
                                                </a>
                                            </td>
                                            <td> Password reset issue </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-5.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Emma Brown</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-primary-subtle text-primary">High</span> </td>
                                            <td> <span class="badge bg-warning">In Progress</span> </td>
                                            <td> 20 Dec, 2024 </td>
                                            <td> 25 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#1265</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-9.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Sophia Clark</span>
                                                </a>
                                            </td>
                                            <td> Subscription plan query </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-6.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Noah Wilson</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-secondary-subtle text-secondary">Low</span> </td>
                                            <td> <span class="badge bg-success">Resolved</span> </td>
                                            <td> 21 Dec, 2024 </td>
                                            <td> 23 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#1266</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-10.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Oliver Hall</span>
                                                </a>
                                            </td>
                                            <td> Performance optimization </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-7.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Isabella Martinez</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-warning-subtle text-warning">Medium</span> </td>
                                            <td> <span class="badge bg-danger">Pending</span> </td>
                                            <td> 19 Dec, 2024 </td>
                                            <td> 24 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#1267</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-5.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">Ava Robinson</span>
                                                </a>
                                            </td>
                                            <td> UI feedback </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="/images/users/avatar-8.jpg" alt="contact-img"
                                                        title="contact-img" class="rounded-circle avatar-sm" />
                                                    <span class="ms-1">James Rodriguez</span>
                                                </a>
                                            </td>
                                            <td> <span class="badge bg-primary-subtle text-primary">High</span> </td>
                                            <td> <span class="badge bg-warning">In Progress</span> </td>
                                            <td> 18 Dec, 2024 </td>
                                            <td> 22 Dec, 2024 </td>
                                            <td style="width: 30px;">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item">Edit
                                                            Ticket</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->
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

    <?= $this->include('partials/footer-scripts') ?>

    <!-- Datatables js -->
    <script src="/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

    <script type="text/javascript">
        // Default Datatable
        $('#tickets-table').DataTable({
            keys: true,
            "language": {
                "paginate": {
                    "previous": "<i class='ri-arrow-left-s-line'>",
                    "next": "<i class='ri-arrow-right-s-line'>"
                }
            },
            "drawCallback": function () {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
            }
        });
    </script>
</body>

</html>