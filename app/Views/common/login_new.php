<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-9/assets/css/login-9.css">
<!-- Login 9 - Bootstrap Brain Component -->
<section class="bg-primary py-3 py-md-5 py-xl-8 min-vh-100">
  <div class="container h-100">
    <div class="row gy-4 align-items-center h-100">
      <div class="col-12 col-md-6 col-xl-7">
        <div class="d-flex justify-content-center text-bg-primary h-100 align-items-center">
          <div class="col-12 col-xl-9">
            <div class="d-flex">
              <img class="img-fluid rounded me-3 mb-4" loading="lazy" src="/images/login/risk_management.png" width="245" height="80" alt="Sistem Manajemen Risiko Logo">
              <img class="img-fluid rounded mb-4" loading="lazy" src="/images/login/logo_ptsi.png" width="300" height="300" alt="Surveyor Indonesia Logo">
            </div>
            <hr class="border-primary-subtle mb-4">
            <h2 class="h1 mb-4">SIMARIS</h2>
            <p class="lead mb-5">Sistem Manajemen Risiko yang dirancang untuk meningkatkan kejelasan dan efektivitas dalam mengelola risiko. Dikembangkan oleh PT. Surveyor Indonesia, bersama anak perusahaan SCCI dan SINERGA, untuk menyediakan solusi terbaik dalam pengelolaan risiko yang terintegrasi dan berkualitas tinggi.</p>
            <div class="text-end">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-5">
        <div class="card border-0 rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-4">
                  <h3>Sign in</h3>
                </div>
              </div>
            </div>
            <form action="<?= base_url('GetLogin'); ?>" method="POST" class="text-start mb-3">
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="inputEmail" placeholder="name@example.com" required>
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Keep me logged in
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Log in now</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
