<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Create Password")) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body class="h-100">
    <div class="auth-bg d-flex min-vh-100">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xxl-3 col-lg-5 col-md-6">
                <a href="index" class="auth-brand d-flex justify-content-center mb-2">
                    <img src="/images/logo-dark.png" alt="dark logo" height="26" class="logo-dark">
                    <img src="/images/logo.png" alt="logo light" height="26" class="logo-light">
                </a>

                <p class="fw-semibold mb-4 text-center text-muted fs-15">Admin Panel Design by Coderthemes</p>

                <div class="card overflow-hidden text-center p-xxl-4 p-3 mb-0">

                    <h4 class="fw-semibold mb-2 fs-20">Create New Password</h4>

                    <p class="text-muted mb-2">Please create your new password.</p>
                    <p class="mb-4">Need password suggestion ? <a href="#!"
                            class="link-dark fw-semibold text-decoration-underline">Suggestion</a></p>


                    <form action="index" class="text-start mb-3">

                        <div class="mb-3">
                            <label class="form-label" for="new-password">Create New Password <small
                                    class="text-info ms-1">Must be at least 8 characters</small></label>
                            <input type="password" id="new-password" name="new-password" class="form-control"
                                placeholder="New Password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="re-password">Reenter New Password</label>
                            <input type="password" id="re-password" name="re-password" class="form-control"
                                placeholder="Reenter Password">
                        </div>
                        <div class="mb-2 d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit">Create New Password</button>
                        </div>
                    </form>

                    <p class="text-muted fs-14 mb-0">
                        Back To <a href="auth-login" class="fw-semibold text-danger ms-1">Login !</a>
                    </p>
                </div>

                <p class="mt-3 text-center mb-0">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Adminto - By <span
                        class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                </p>
            </div>
        </div>
    </div>

    <?= $this->include('partials/footer-scripts') ?>

</body>

</html>