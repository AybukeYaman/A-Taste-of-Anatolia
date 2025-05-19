<?php include('includes/header.php'); ?>

<!-- Diyet Detay Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">

          <h1 class="text-center display-5 mb-4">
            <?php echo htmlspecialchars($diet['title'] ?? 'Diyet Başlığı'); ?>
          </h1>

          <!-- Diyet içeriği -->
          <div class="mb-4">
            <p class="lead">
              <?php echo nl2br(htmlspecialchars($diet['body_markdown'] ?? 'Diyet açıklaması buraya gelecek.')); ?>
            </p>
          </div>

          <!-- Diyet görseli (opsiyonel) -->
          <?php if (!empty($diet['image'])): ?>
            <img src="<?php echo htmlspecialchars($diet['image']); ?>" class="img-fluid rounded shadow" alt="Diyet görseli">
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>