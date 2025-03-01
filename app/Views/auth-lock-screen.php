<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Lock Screen")) ?>

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

                    <h4 class="fw-semibold mb-4 fs-20">Welcome Back</h4>

                    <div class="text-center">
                        <img src="/images/users/avatar-1.jpg" alt=""
                            class="avatar-xl rounded-circle img-thumbnail">
                        <div class="mt-2 mb-3">
                            <h4 class="fw-semibold">Hi ! Nowak Helme.</h4>
                            <p class="mb-0 fst-italic text-muted">Enter your password to access the admin.</p>
                        </div>
                    </div>

                    <form action="index" class="text-start mb-3">
                        <div class="mb-3">
                            <label class="form-label" for="lock-password">Enter Password</label>
                            <input type="password" id="lock-password" name="lock-password" class="form-control"
                                placeholder="Password">
                        </div>
                        <div class="mb-2 d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit">Access to Screen</button>
                        </div>
                    </form>

                    <p class="text-muted fs-14 mb-0">
                        Not you? return <a href="auth-login" class="fw-semibold text-danger ms-1">Login !</a>
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