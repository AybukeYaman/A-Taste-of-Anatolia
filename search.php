<?php include('includes/header.php'); ?>

<!-- Arama Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row mb-5">
    <div class="col text-center">
      <h1 class="display-4 fw-bold">Tarif Ara</h1>
      <p class="lead">Tarif, içerik, kategori veya diyet adı girerek arama yapabilirsiniz.</p>
      <form method="GET" action="search.php" class="d-flex justify-content-center mt-4">
        <input type="text" class="form-control w-50 me-2" name="q" placeholder="Örneğin: kısır, protein, çorba..." required>
        <button type="submit" class="btn btn-primary">Ara</button>
      </form>
    </div>
  </div>

  <!-- Arama Sonuçları -->
  <div class="row g-4">
    <?php foreach ($results as $item): ?>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <?php if (!empty($item['thumb'])): ?>
            <img src="<?php echo htmlspecialchars($item['thumb']); ?>" class="card-img-top" alt="Sonuç görseli">
          <?php endif; ?>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h5>
            <p class="card-text small text-muted">
              Tür: <?php echo ucfirst($item['type']); ?> - <?php echo date('d.m.Y', strtotime($item['created_at'])); ?>
            </p>
            <a href="<?php echo $item['link']; ?>" class="btn btn-outline-primary mt-auto">Detaya Git</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <?php if (empty($results)): ?>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="alert alert-warning">Aramanıza uygun sonuç bulunamadı.</div>
      </div>
    </div>
  <?php endif; ?>
</div>

<?php include('includes/footer.php'); ?>