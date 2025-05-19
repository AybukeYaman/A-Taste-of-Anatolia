<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarif Detayı</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .recipe-container {
      max-width: 800px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }
    .recipe-title {
      margin-bottom: 25px;
    }
    .section-title {
      margin-top: 30px;
      font-weight: bold;
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

  <!-- Tarif Detayı -->
  <div class="container">
    <div class="recipe-container">
      <h2 class="recipe-title">Zeytinyağlı Sarma</h2>
      <p><strong>Ekleyen:</strong> Aybüke Yaman</p>

      <div class="section-title">Malzemeler:</div>
      <ul>
        <li>Yarım kilo asma yaprağı</li>
        <li>2 su bardağı pirinç</li>
        <li>1 adet büyük boy soğan</li>
        <li>Zeytinyağı, tuz, baharatlar</li>
      </ul>

      <div class="section-title">Yapılış:</div>
      <p>
        Soğanları doğrayıp zeytinyağında kavurun. Pirinci ekleyin ve kavurmaya devam edin.
        Baharatlar ile tatlandırıp soğumaya bırakın. Asma yapraklarına harcı koyup sarın.
        Tencereye dizin, üzerine limon dilimleri ekleyin ve zeytinyağı gezdirip pişirin.
      </p>

      <div class="section-title">Yorumlar:</div>
      <div class="mt-3">
        <p><strong>Serap:</strong> Denedim, harika oldu! Teşekkürler 💚</p>
        <p><strong>Ali:</strong> Nefis bir tarif, annemin tarifine çok benziyor.</p>
      </div>

      <!-- Yorum Ekleme Formu -->
      <form method="post" action="recipe.php?id=123" class="mt-4">
        <div class="mb-3">
          <label for="comment" class="form-label">Yorumunuz</label>
          <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Yorum Gönder</button>
      </form>
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
