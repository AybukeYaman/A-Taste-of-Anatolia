?php include('includes/header.php'); ?>

<!-- Haberler Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="text-center mb-5">
    <h1 class="display-4 fw-bold">Yemek Haberleri</h1>
    <p class="lead">Yemek dünyasından son gelişmeler, ipuçları ve öneriler burada.</p>
  </div>

  <div class="row g-4">
    <?php foreach ($newsList as $news): ?>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm rounded-3">
          <?php if (!empty($news['img'])): ?>
            <img src="<?php echo htmlspecialchars($news['img']); ?>" class="card-img-top" alt="Haber görseli">
          <?php endif; ?>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo htmlspecialchars($news['title']); ?></h5>
            <p class="card-text small text-muted">
              <?php echo date('d.m.Y', strtotime($news['created_at'])); ?> tarihinde eklendi
            </p>
            <a href="news_detail.php?id=<?php echo $news['id']; ?>" class="btn btn-outline-primary mt-auto">Haberi Oku</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <?php if (empty($newsList)): ?>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="alert alert-warning">Henüz haber eklenmemiş.</div>
      </div>
    </div>
  <?php endif; ?>
</div>

<?php include('includes/footer.php'); ?>
