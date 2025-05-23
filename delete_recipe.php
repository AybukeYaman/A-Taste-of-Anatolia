<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarifi Sil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .confirm-delete {
      max-width: 600px;
      margin: 60px auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.08);
      text-align: center;
    }
    .btn-space {
      margin-right: 10px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="home.php">A Taste of Anatolia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="home.php">Ana Sayfa</a></li>
          <li class="nav-item"><a class="nav-link" href="my_recipes.php">Tariflerim</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Çıkış Yap</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Onay Kutusu -->
  <div class="container">
    <div class="confirm-delete">
      <h2>Bu tarifi silmek istediğinizden emin misiniz?</h2>
      <p>Silme işlemi geri alınamaz. Lütfen dikkatli olun.</p>
      <form method="post" action="delete_recipe.php">
        <input type="hidden" name="recipe_id" value="123">
        <button type="submit" class="btn btn-danger btn-lg btn-space">Evet, Sil</button>
        <a href="my_recipes.php" class="btn btn-secondary btn-lg">Vazgeç</a>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer class="mt-5 bg-dark text-white text-center py-3">
    <p>&copy; 2025 A Taste of Anatolia. Tüm hakları saklıdır.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
