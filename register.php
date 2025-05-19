<?php include('includes/header.php'); ?>

<!-- Kayıt Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-12">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">

          <h1 class="text-center mb-4 display-5">Kayıt Ol</h1>

          <form action="register.php" method="POST" novalidate>

            <!-- Ad Soyad -->
            <div class="mb-3">
              <label for="name" class="form-label">Ad Soyad</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Örneğin: Aybüke Yaman" required>
            </div>

            <!-- E-posta -->
            <div class="mb-3">
              <label for="email" class="form-label">E-posta</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="ornek@mail.com" required>
            </div>

            <!-- Şifre -->
            <div class="mb-3">
              <label for="password" class="form-label">Şifre</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <!-- Şifre Tekrar -->
            <div class="mb-4">
              <label for="confirm_password" class="form-label">Şifre Tekrar</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>

            <!-- Buton -->
            <div class="d-grid">
              <button type="submit" class="btn btn-success btn-lg">Kayıt Ol</button>
            </div>

            <!-- Zaten hesabın var mı -->
            <div class="text-center mt-3">
              <small>Zaten hesabınız var mı? <a href="login.php">Giriş Yap</a></small>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>