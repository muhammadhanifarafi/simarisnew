<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "File Manager")) ?>

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

                <div class="d-flex gap-2">
                    <div class=" offcanvas-xl offcanvas-start file-manager" tabindex="-1" id="fileManagerSidebar"
                        aria-labelledby="fileManagerSidebarLabel">
                        <!-- users -->
                        <div class="card d-flex flex-column">
                            <div class="p-3">
                                <div class="d-flex flex-column">
                                    <div class="d-flex justify-content-between gap-2 align-items-center mb-2">
                                        <button type="button" class="btn fw-medium btn-danger w-100">
                                            Create New <i class="ri-add-line ms-1"></i>
                                        </button>

                                        <button type="button" class="btn btn-soft-danger ms-auto d-xl-none"
                                            data-bs-dismiss="offcanvas" data-bs-target="#fileManagerSidebar"
                                            aria-label="Close">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>


                                    <div class="file-menu">
                                        <a href="#" class="list-group-item rounded active"><i
                                                class="ri-folder-2-line fs-18 align-middle me-2"></i>My
                                            Files</a>
                                        <a href="#" class="list-group-item rounded"><i
                                                class="ri-drive-line fs-18 align-middle me-2"></i>Google
                                            Drive</a>
                                        <a href="#" class="list-group-item rounded"><i
                                                class="ri-share-line fs-18 align-middle me-2"></i>Share with
                                            me</a>
                                        <a href="#" class="list-group-item rounded"><i
                                                class="ri-time-line fs-18 align-middle me-2"></i>Recent</a>
                                        <a href="#" class="list-group-item rounded"><i
                                                class="ri-star-line fs-18 align-middle me-2"></i>Starred</a>
                                        <a href="#" class="list-group-item rounded"><i
                                                class="ri-delete-bin-line fs-18 align-middle me-2"></i>Deleted
                                            Files</a>
                                    </div>

                                    <div class="mt-5 pt-5">
                                        <div class="alert alert-info p-3 pt-0 text-center mb-0" role="alert">
                                            <img src="/images/coffee-cup.svg" alt="" class="img-fluid mt-n5"
                                                style="max-width: 135px;">
                                            <div>
                                                <h5 class="alert-heading fw-medium fs-18 mt-2">Get more space
                                                    for files</h5>
                                                <p>We offer you unlimited storage space for all you needs</p>

                                                <a href="#!" class="btn btn-secondary">Upgrade to Pro</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card w-100">
                        <div class="p-3 d-flex align-items-center gap-3">
                            <button type="button" class="btn btn-sm btn-icon btn-light d-xxl-none d-flex p-1"
                                data-bs-toggle="offcanvas" data-bs-target="#fileManagerSidebar"
                                aria-controls="fileManagerSidebar">
                                <i class="ri-menu-2-line lh-1 fs-17"></i>
                            </button>

                            <h4 class="header-title me-auto">Files</h4>
                            <a href="#" class="link-reset fw-medium text-decoration-underline link-offset-2">View
                                All <i class="ri-arrow-right-line"></i></a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap border-top mb-0">
                                <thead class="bg-light bg-opacity-25">
                                    <tr>
                                        <th class="ps-3 fw-bold fs-12 text-uppercase text-muted">Name</th>
                                        <th class="fs-12 fw-bold text-uppercase text-muted">Uploaded By</th>
                                        <th class="fs-12 fw-bold text-uppercase text-muted">Size</th>
                                        <th class="fs-12 fw-bold text-uppercase text-muted">Last Update</th>
                                        <th class="fs-12 fw-bold text-uppercase text-muted">Members</th>
                                        <th class="fs-12 fw-bold text-uppercase text-muted" style="width: 80px;">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-info-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-line fs-22 text-info"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">Dashboard-requirements.docx</a></span>
                                                    <p class="mb-0 fs-12">12 Docx</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-1.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Harriett E. Penix</p>
                                                    <span class="fs-12">harriettepenix@rhyta.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>128 MB</td>
                                        <td>
                                            April 25, 2024
                                        </td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-success rounded-circle fw-bold">
                                                        D
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                        K
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-secondary rounded-circle fw-bold">
                                                        H
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                        L
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-info rounded-circle fw-bold">
                                                        G
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-1.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-danger-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-pdf-line fs-22 text-danger"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">ocen-dashboard.pdf</a></span>
                                                    <p class="mb-0 fs-12">18 Pdf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-2.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Carol L. Simon</p>
                                                    <span class="fs-12">carollcimon@jourrapide.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>521 MB</td>
                                        <td>
                                            April 28, 2024
                                        </td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-danger rounded-circle fw-bold">
                                                        Y
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-success rounded-circle fw-bold">
                                                        L
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title text-bg-dark rounded-circle fw-bold">
                                                        O
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                        J
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                        G
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-1.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-warning-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-copy-line fs-22 text-warning"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">Dashboard tech
                                                            requirements</a></span>
                                                    <p class="mb-0 fs-12">12 File</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-3.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Rosa L. Winters</p>
                                                    <span class="fs-12">rosalwinters@teleworm.us</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>7.2 MB</td>
                                        <td>
                                            May 1, 2024
                                        </td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                        A
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                        B
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-danger rounded-circle fw-bold">
                                                        R
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-secondary rounded-circle fw-bold">
                                                        C
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title text-bg-dark rounded-circle fw-bold">
                                                        U
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-1.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-primary-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-image-line fs-22 text-primary"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">dashboard.jpg</a></span>
                                                    <p class="mb-0 fs-12">172 Jpg Photo</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-4.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Jeremy C. Willi</p>
                                                    <span class="fs-12">jeremycwilliams@dayrep.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>54.2 MB</td>
                                        <td>
                                            May 2, 2024
                                        </td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                        L
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-secondary rounded-circle fw-bold">
                                                        Y
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title text-bg-dark rounded-circle fw-bold">
                                                        A
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                        R
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-info rounded-circle fw-bold">
                                                        V
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-1.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-success-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-zip-line fs-22 text-success"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">admin-hospital.zip</a></span>
                                                    <p class="mb-0 fs-12">admin-hospital.zip</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-5.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">James R. Alvares</p>
                                                    <span class="fs-12">jamesralvares@jourrapide.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>8.3 MB</td>
                                        <td>
                                            May 6, 2024
                                        </td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title text-bg-dark rounded-circle fw-bold">
                                                        G
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title text-bg-light rounded-circle fw-bold">
                                                        O
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-secondary rounded-circle fw-bold">
                                                        W
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                        A
                                                    </span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                        K
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-1.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-danger-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-pdf-line fs-22 text-danger"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">Project-summary.pdf</a></span>
                                                    <p class="mb-0 fs-12">5 Pages</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-2.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Michael S. Parks</p>
                                                    <span class="fs-12">michaelparks@mail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>80 MB</td>
                                        <td>April 22, 2024</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span
                                                        class="avatar-title bg-success rounded-circle fw-bold">A</span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span
                                                        class="avatar-title bg-primary rounded-circle fw-bold">T</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-2.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-primary-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-excel-line fs-22 text-primary"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">Sales-data.xlsx</a></span>
                                                    <p class="mb-0 fs-12">20 Sheets</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-3.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Samantha W. Howard</p>
                                                    <span class="fs-12">samantha.howard@mail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>256 MB</td>
                                        <td>April 20, 2024</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-info rounded-circle fw-bold">S</span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span
                                                        class="avatar-title bg-warning rounded-circle fw-bold">C</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-3.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-warning-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-ppt-2-line fs-22 text-warning"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">Presentation-slides.pptx</a></span>
                                                    <p class="mb-0 fs-12">15 Slides</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-4.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Jonathan D. Keller</p>
                                                    <span class="fs-12">jonathan.keller@mail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>64 MB</td>
                                        <td>April 18, 2024</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-danger rounded-circle fw-bold">J</span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span
                                                        class="avatar-title bg-primary rounded-circle fw-bold">M</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-4.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-success-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-text-line fs-22 text-success"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">Readme.txt</a></span>
                                                    <p class="mb-0 fs-12">1 Page</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-5.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Emily R. Stone</p>
                                                    <span class="fs-12">emilystone@mail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2 MB</td>
                                        <td>April 15, 2024</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span
                                                        class="avatar-title bg-warning rounded-circle fw-bold">E</span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span
                                                        class="avatar-title bg-secondary rounded-circle fw-bold">N</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-5.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="flex-shrink-0 avatar-md bg-secondary-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                                    <i class="ri-file-image-line fs-22 text-secondary"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-medium"><a href="javascript: void(0);"
                                                            class="text-reset">Team-photo.jpg</a></span>
                                                    <p class="mb-0 fs-12">1 Image</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="javascript: void(0);">
                                                        <img src="/images/users/avatar-6.jpg"
                                                            class="rounded-circle avatar-md" alt="friend">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Carlos M. Reyes</p>
                                                    <span class="fs-12">carlos.reyes@mail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>3 MB</td>
                                        <td>April 10, 2024</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-info rounded-circle fw-bold">C</span>
                                                </div>
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title bg-danger rounded-circle fw-bold">R</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="#" class="dropdown-toggle drop-arrow-none fs-20 link-reset"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-share-line me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-link me-1"></i> Get Sharable Link</a>
                                                    <a href="/images/users/avatar-6.jpg" download=""
                                                        class="dropdown-item"><i class="ri-download-line me-1"></i>
                                                        Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-pushpin-2-line me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-edit-box-line me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="ri-delete-bin-line me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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