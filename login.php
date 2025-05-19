<?php include('includes/header.php'); ?>

<!-- Giriş Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-12">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">

          <h1 class="text-center mb-4 display-5">Giriş Yap</h1>

          <form action="login.php" method="POST" novalidate>

            <!-- E-posta -->
            <div class="mb-3">
              <label for="email" class="form-label">E-posta</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="ornek@mail.com" required>
            </div>

            <!-- Şifre -->
            <div class="mb-4">
              <label for="password" class="form-label">Şifre</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <!-- Giriş Butonu -->
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">Giriş Yap</button>
            </div>

            <!-- Şifre Unuttum ve Kayıt -->
            <div class="text-center mt-3">
              <small><a href="reset_password.php">Şifremi unuttum</a> | <a href="register.php">Kayıt Ol</a></small>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
