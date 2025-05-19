<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tariflerim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .recipe-card {
      margin-bottom: 20px;
    }
    .recipe-card .card {
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
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
          <li class="nav-item"><a class="nav-link active" href="my_recipes.php">Tariflerim</a></li>
          <li class="nav-item"><a class="nav-link" href="add_recipe.php">Tarif Ekle</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Çıkış Yap</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Tariflerim -->
  <div class="container py-5">
    <h2 class="text-center mb-4">Tariflerim</h2>
    <div class="row">
      <!-- Örnek Tarif Kartı -->
      <div class="col-md-6 col-lg-4 recipe-card">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Zeytinyağlı Sarma</h5>
            <p class="card-text">Asma yaprağı ile yapılan nefis bir tarif...</p>
            <a href="edit_recipe.php?id=123" class="btn btn-primary btn-sm">Düzenle</a>
            <a href="delete_recipe.php?id=123" class="btn btn-danger btn-sm">Sil</a>
          </div>
        </div>
      </div>

      <!-- Daha fazla tarif PHP ile dinamik olarak buraya eklenecek -->
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4">
    <div class="container">
      <p>&copy; 2025 A Taste of Anatolia. Tüm hakları saklıdır.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
