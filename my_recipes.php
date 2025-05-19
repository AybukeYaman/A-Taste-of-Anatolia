<?php include('includes/header.php'); ?>

<!-- Benim Tariflerim Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row mb-4">
    <div class="col text-center">
      <h1 class="display-5">Tariflerim</h1>
      <p class="lead">Aşağıda daha önce eklediğiniz tüm tarifleri görebilir, düzenleyebilir veya silebilirsiniz.</p>
      <a href="add_recipe.php" class="btn btn-success mt-2">+ Yeni Tarif Ekle</a>
    </div>
  </div>

  <div class="row g-4">
    <?php foreach ($recipes as $recipe): ?>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm rounded-3">
          <img src="<?php echo htmlspecialchars($recipe['thumb'] ?? 'assets/default.jpg'); ?>" class="card-img-top" alt="Tarif görseli">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo htmlspecialchars($recipe['title']); ?></h5>
            <p class="card-text small text-muted">Oluşturulma: <?php echo date('d.m.Y', strtotime($recipe['created_at'])); ?></p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="edit_recipe.php?id=<?php echo $recipe['id']; ?>" class="btn btn-outline-primary btn-sm">Düzenle</a>
              <a href="delete_recipe.php?id=<?php echo $recipe['id']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Bu tarifi silmek istediğinize emin misiniz?')">Sil</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <?php if (empty($recipes)): ?>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="alert alert-warning" role="alert">
          Henüz hiç tarif eklemediniz.
        </div>
      </div>
    </div>
  <?php endif; ?>

</div>

<?php include('includes/footer.php'); ?>
