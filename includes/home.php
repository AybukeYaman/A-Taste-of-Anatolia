<?php 
session_start(); 
$lang = $_SESSION['lang'] ?? 'tr'; 
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ana Sayfa</title>
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<div class="container mt-5">
  <h1 class="text-center mb-4">Hoş Geldiniz!</h1>
  <div class="row g-4">
    <div class="col-md-4">
      <a href="category.php?type=soups" class="btn btn-outline-primary w-100 p-4">Çorbalar</a>
    </div>
    <div class="col-md-4">
      <a href="category.php?type=appetizers" class="btn btn-outline-primary w-100 p-4">Ara Sıcaklar</a>
    </div>
    <div class="col-md-4">
      <a href="category.php?type=mains" class="btn btn-outline-primary w-100 p-4">Ana Yemekler</a>
    </div>
    <div class="col-md-4">
      <a href="diets.php" class="btn btn-outline-success w-100 p-4">Diyet Menüleri</a>
    </div>
    <div class="col-md-4">
      <a href="calories.php" class="btn btn-outline-warning w-100 p-4">Kaç Kalori?</a>
    </div>
    <div class="col-md-4">
      <a href="qa.php" class="btn btn-outline-info w-100 p-4">Soru & Cevap</a>
    </div>
  </div>
</div>

<script src="assets/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
