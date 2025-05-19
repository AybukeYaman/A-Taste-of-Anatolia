<?php include('includes/header.php'); ?>

<!-- Şifre Sıfırlama Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-12">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">

          <h1 class="text-center mb-4 display-5">Şifre Sıfırlama</h1>

          <form action="reset_password.php" method="POST" novalidate>

            <!-- E-posta -->
            <div class="mb-3">
              <label for="email" class="form-label">Kayıtlı E-posta</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="ornek@mail.com" required>
            </div>

            <!-- Yeni Şifre -->
            <div class="mb-3">
              <label for="new_password" class="form-label">Yeni Şifre</label>
              <input type="password" class="form-control" id="new_password" name="new_password" required>
            </div>

            <!-- Yeni Şifre Tekrar -->
            <div class="mb-4">
              <label for="confirm_password" class="form-label">Yeni Şifre Tekrar</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>

            <!-- Gönder Butonu -->
            <div class="d-grid">
              <button type="submit" class="btn btn-danger btn-lg">Şifreyi Sıfırla</button>
            </div>

            <!-- Giriş sayfasına dönüş -->
            <div class="text-center mt-3">
              <small><a href="login.php">Giriş sayfasına dön</a></small>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>