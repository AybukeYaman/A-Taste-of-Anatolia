<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategori - Tarifler</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .category-section {
      max-width: 1000px;
      margin: 40px auto;
    }
    .card {
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
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
          <li class="nav-item"><a class="nav-link" href="add_recipe.php">Tarif Ekle</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Çıkış Yap</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Kategori Tarifleri -->
  <div class="container category-section">
    <h2 class="mb-4 text-center">Kategori: Zeytinyağlılar</h2>
    <div class="row">
      <!-- Örnek Tarif Kartı -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Zeytinyağlı Sarma</h5>
            <p class="card-text">Asma yaprağı ile yapılan geleneksel tarif...</p>
            <a href="recipe.php?id=123" class="btn btn-outline-primary btn-sm">Tarifi Gör</a>
          </div>
        </div>
      </div>

      <!-- PHP ile diğer tarifler burada listelenebilir -->
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
      <p>&copy; 2025 A Taste of Anatolia. Tüm hakları saklıdır.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
