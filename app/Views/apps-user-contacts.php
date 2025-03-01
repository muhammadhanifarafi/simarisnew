<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "User Contact")) ?>

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

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header justify-content-between d-flex gap-2">
                                    <a href="javascript:void(0);" class="btn btn-danger">
                                        <i class="ti ti-circle-plus fs-20 me-2"></i> Add New
                                    </a>

                                    <form class="d-flex align-items-start flex-wrap justify-content-sm-end gap-2">
                                        <!-- Search Input -->
                                        <div class="d-flex align-items-start flex-wrap">
                                            <label for="membersearch-input" class="visually-hidden">Search</label>
                                            <input type="search" class="form-control" id="membersearch-input"
                                                placeholder="Search...">
                                        </div>

                                        <!-- Settings Button -->
                                        <button type="button" class="btn btn-success">
                                            <i class="ti ti-settings fs-20"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-6.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Paul
                                            Halpern</a></h4>
                                    <p class="text-muted">@Manager <span> | </span><a href="#"
                                            class="text-danger">coolweb.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-5.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">John Adam</a></h4>
                                    <p class="text-muted">@Marketer <span> | </span><a href="#"
                                            class="text-danger">coolmedia.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat for Card 3 to Card 9 -->


                        <!-- Card 3 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-7.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Alex
                                            Morgan</a></h4>
                                    <p class="text-muted">@Developer <span> | </span><a href="#"
                                            class="text-danger">devstream.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-8.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Sophia
                                            Turner</a></h4>
                                    <p class="text-muted">@UI Designer <span> | </span><a href="#"
                                            class="text-danger">creativeminds.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-9.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Emma
                                            Watson</a></h4>
                                    <p class="text-muted">@Marketer <span> | </span><a href="#"
                                            class="text-danger">marketingpro.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-10.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Noah
                                            Jackson</a></h4>
                                    <p class="text-muted">@Project Manager <span> | </span><a href="#"
                                            class="text-danger">pmlaunch.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 7 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-1.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Liam
                                            Baker</a></h4>
                                    <p class="text-muted">@Consultant <span> | </span><a href="#"
                                            class="text-danger">bizadvisor.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 8 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-3.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Olivia
                                            Carter</a></h4>
                                    <p class="text-muted">@HR Specialist <span> | </span><a href="#"
                                            class="text-danger">hrconnect.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- Card 9 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-4.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Ava Johnson</a></h4>
                                    <p class="text-muted">@Designer <span> | </span><a href="#"
                                            class="text-danger">designhub.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 10 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-5.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Mason Williams</a></h4>
                                    <p class="text-muted">@Developer <span> | </span><a href="#"
                                            class="text-danger">devforge.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 11 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-6.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Sophia Martinez</a></h4>
                                    <p class="text-muted">@Content Creator <span> | </span><a href="#"
                                            class="text-danger">contentwave.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 12 -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-22"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <img src="/images/users/avatar-7.jpg"
                                        class="rounded-circle img-thumbnail avatar-xl mt-1" alt="profile-image">
                                    <h4 class="mt-3 mb-1"><a href="apps-user-profile" class="text-dark">Ethan Davis</a></h4>
                                    <p class="text-muted">@Analyst <span> | </span><a href="#"
                                            class="text-danger">analytica.com</a></p>
                                    <ul class="list-inline mt-4 mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-primary text-primary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-danger text-danger rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-info text-info rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="border border-secondary text-secondary rounded-circle p-1 fs-16 d-flex justify-content-center align-items-center"><i
                                                    class="ti ti-brand-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center mb-3">
                        <div class="col-sm-6">
                            <div>
                                <p class="fs-14 m-0 text-body text-muted">Showing <span class="text-body fw-semibold">12</span> Of <span class="text-body fw-semibold">229</span> members</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-end">
                                <ul class="pagination pagination-rounded mb-sm-0">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
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
                    <!-- end row -->

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