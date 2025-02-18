<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Log In")) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body>

    <div class="auth-bg d-flex min-vh-100">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xxl-3 col-lg-5 col-md-6">
                <a href="index" class="auth-brand d-flex justify-content-center mb-2">
                    <img src="/images/login/logo_app.png" alt="app logo" height="200" class="logo-dark">
                    <!-- <img src="/images/login/logo_app.png" alt="app logo" height="26" class="logo-light"> -->
                </a>

                <div class="card overflow-hidden text-center p-xxl-4 p-3 mb-0">

                    <h4 class="fw-semibold mb-3 fs-18">SIMARIS</h4>
                    
                    <form action="<?= base_url('GetLogin'); ?>" method="POST" class="text-start mb-3">
                    <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="inputEmail" placeholder="Enter your email" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="inputPassword" placeholder="Enter your password" />
                                            <small>
                                                <!-- <a href="pages-reset-password.html">Forgot password?</a> -->
                                                <a href="<?= base_url('register') ?>">Don't have an account? Register</a>
                                            </small>
                                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>

                            <a href="auth-recoverpw" class="text-muted border-bottom border-dashed">Forget
                                Password</a>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit">Login</button>
                        </div>
                    </form>

                    <p class="text-muted fs-14 mb-0">Don't have an account?
                        <a href="auth-register" class="fw-semibold text-danger ms-1">Sign Up !</a>
                    </p>

                </div>
                <p class="mt-4 text-center mb-0">
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