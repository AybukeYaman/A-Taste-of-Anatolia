<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tarifi Düzenle</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body { background-color: #f8f9fa; }
    .edit-form {
      max-width: 750px;
      margin: 40px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.06);
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
          <li class="nav-item"><a class="nav-link active" href="#">Tarifi Düzenle</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Çıkış Yap</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Düzenleme Formu -->
  <div class="container">
    <div class="edit-form">
      <h2 class="mb-4 text-center">Tarifi Düzenle</h2>
      <form method="post" action="edit_recipe.php">
        <div class="mb-3">
          <label for="title" class="form-label">Tarif Başlığı</label>
          <input type="text" class="form-control" id="title" name="title" value="Zeytinyağlı Sarma" required>
        </div>
        <div class="mb-3">
          <label for="ingredients" class="form-label">Malzemeler</label>
          <textarea class="form-control" id="ingredients" name="ingredients" rows="4" required>Yarım kilo asma yaprağı
2 su bardağı pirinç
1 adet soğan
...</textarea>
        </div>
        <div class="mb-3">
          <label for="steps" class="form-label">Yapılış Aşamaları</label>
          <textarea class="form-control" id="steps" name="steps" rows="6" required>1. Soğanları doğrayın.
2. Pirinci yıkayıp süzün.
3. Tüm malzemeleri karıştırın...
...</textarea>
        </div>
        <input type="hidden" name="recipe_id" value="123" />
        <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg">Güncelle</button>
        </div>
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
