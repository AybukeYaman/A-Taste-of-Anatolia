
<?php include('includes/header.php'); ?>

<!-- Kategori Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row mb-4">
    <div class="col text-center">
      <h1 class="display-5">Kategori: <?php echo htmlspecialchars($category['name'] ?? 'Kategori'); ?></h1>
      <p class="text-muted">Bu kategorideki tüm tarifler aşağıda listelenmiştir.</p>
    </div>
  </div>

  <div class="row g-4">
    <?php if (!empty($recipes)): ?>
      <?php foreach ($recipes as $recipe): ?>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100 shadow-sm rounded-3">
            <a href="recipe.php?id=<?php echo $recipe['id']; ?>">
              <img src="<?php echo htmlspecialchars($recipe['thumb'] ?? 'assets/default.jpg'); ?>" class="card-img-top" alt="Tarif Görseli">
            </a>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php echo htmlspecialchars($recipe['title']); ?></h5>
              <p class="card-text small text-muted">Eklenme: <?php echo date('d.m.Y', strtotime($recipe['created_at'])); ?></p>
              <a href="recipe.php?id=<?php echo $recipe['id']; ?>" class="btn btn-primary mt-auto">Tarifi Gör</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col text-center">
        <div class="alert alert-warning">Bu kategoriye ait tarif bulunamadı.</div>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php include('includes/footer.php'); ?>