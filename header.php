<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A Taste of Anatolia</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Özel stil dosyan varsa -->
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- Navigasyon -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="home.php">Anatolia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="category.php">Yemek Tarifleri</a></li>
        <li class="nav-item"><a class="nav-link" href="diets.php">Diyet</a></li>
        <li class="nav-item"><a class="nav-link" href="calories.php">Kaç Kalori?</a></li>
        <li class="nav-item"><a class="nav-link" href="news.php">Haber</a></li>
        <li class="nav-item"><a class="nav-link" href="qa.php">Soru-Cevap</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li class="nav-item"><a class="nav-link" href="my_recipes.php">Tariflerim</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Çıkış Yap</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="login.php">Giriş</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Kayıt</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Sayfa İçeriği Başlangıcı -->
<main class="mt-4">
