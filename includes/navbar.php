<?php
// Navbar tüm sayfalarda çağrıldığı için session kontrolü yapılır
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="home.php">Yemek Tarifi Sitesi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <?php if (isset($_SESSION['user_id'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="add_recipe.php">Tarif Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="my_recipes.php">Tariflerim</a>
          </li>
        <?php endif; ?>
      </ul>

      <ul class="navbar-nav">
        <?php if (isset($_SESSION['user_id'])): ?>
          <li class="nav-item">
            <span class="navbar-text me-3">
              Merhaba, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Kullanıcı'); ?>
            </span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Çıkış</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Giriş</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Kayıt Ol</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
