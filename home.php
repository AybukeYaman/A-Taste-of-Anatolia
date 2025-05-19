<?php include('includes/header.php'); ?>

<!-- Ana Sayfa - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="text-center mb-5">
    <h1 class="display-4 fw-bold">A Taste of Anatolia</h1>
    <p class="lead">Geleneksel Türk Mutfağından Lezzetli Tarifler</p>
  </div>

  <div class="row text-center g-4">
    <div class="col-6 col-md-4 col-lg-2">
      <a href="category.php?type=soups" class="text-decoration-none text-dark">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <i class="bi bi-cup-hot display-4"></i>
            <h5 class="mt-3">Çorbalar</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-lg-2">
      <a href="category.php?type=appetizers" class="text-decoration-none text-dark">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <i class="bi bi-egg-fried display-4"></i>
            <h5 class="mt-3">Ara Sıcaklar</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-lg-2">
      <a href="category.php?type=mains" class="text-decoration-none text-dark">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <i class="bi bi-restaurant display-4"></i>
            <h5 class="mt-3">Ana Yemekler</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-lg-2">
      <a href="category.php?type=desserts" class="text-decoration-none text-dark">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <i class="bi bi-cupcake display-4"></i>
            <h5 class="mt-3">Tatlılar</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-lg-2">
      <a href="diets.php" class="text-decoration-none text-dark">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <i class="bi bi-heart-pulse display-4"></i>
            <h5 class="mt-3">Diyet</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-lg-2">
      <a href="news.php" class="text-decoration-none text-dark">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <i class="bi bi-newspaper display-4"></i>
            <h5 class="mt-3">Haberler</h5>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="mt-5 text-center">
    <a href="search.php" class="btn btn-outline-primary btn-lg">Tarif Ara</a>
  </div>
</div>

<?php include('includes/footer.php'); ?>