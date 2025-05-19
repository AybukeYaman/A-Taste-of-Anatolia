<?php include('includes/header.php'); ?>

<!-- Haber Detay Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">

          <h1 class="display-5 mb-4 text-center">
            <?php echo htmlspecialchars($news['title'] ?? 'Haber Başlığı'); ?>
          </h1>

          <!-- Görsel -->
          <?php if (!empty($news['img'])): ?>
            <img src="<?php echo htmlspecialchars($news['img']); ?>" class="img-fluid rounded mb-4" alt="Haber görseli">
          <?php endif; ?>

          <!-- Tarih -->
          <p class="text-muted text-end mb-3">
            Yayınlanma Tarihi: <?php echo date('d.m.Y', strtotime($news['created_at'] ?? 'now')); ?>
          </p>

          <!-- İçerik -->
          <div class="news-content">
            <p class="lead">
              <?php echo nl2br(htmlspecialchars($news['body_md'] ?? 'Haber içeriği buraya gelecek.')); ?>
            </p>
          </div>

          <!-- Geri Dön Butonu -->
          <div class="text-center mt-4">
            <a href="news.php" class="btn btn-outline-secondary">← Tüm Haberler</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>