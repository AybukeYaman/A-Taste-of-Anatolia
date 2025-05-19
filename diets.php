<?php include('includes/header.php'); ?>

<!-- Diyet Menüsü Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="text-center mb-5">
    <h1 class="display-4 fw-bold">Diyet Menüleri</h1>
    <p class="lead">Sağlıklı beslenmek isteyenler için özenle hazırlanmış diyet programları.</p>
  </div>

  <div class="row g-4">
    <div class="col-12 col-sm-6 col-lg-4">
      <a href="diet_detail.php?id=protein" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-bullseye display-4 text-success"></i>
            <h4 class="mt-3">Protein Diyeti</h4>
            <p class="text-muted">Kas yapımını destekleyen yüksek protein içerikli menüler.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <a href="diet_detail.php?id=carb" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-fire display-4 text-danger"></i>
            <h4 class="mt-3">Karbonhidrat Diyeti</h4>
            <p class="text-muted">Enerji ihtiyacını karşılayan dengeli karbonhidrat planı.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <a href="diet_detail.php?id=keto" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <i class="bi bi-droplet display-4 text-primary"></i>
            <h4 class="mt-3">Ketojenik Diyet</h4>
            <p class="text-muted">Yağ yakımını artıran düşük karbonhidratlı bir yaklaşım.</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
