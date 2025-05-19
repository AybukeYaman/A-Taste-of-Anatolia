<?php include('includes/header.php'); ?>

<!-- Tarif Silme Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-12">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5 text-center">

          <h1 class="display-6 mb-4">Tarifi Sil</h1>
          <p class="lead">Bu tarifi silmek istediğinize emin misiniz?</p>

          <div class="mb-4">
            <h5 class="fw-bold"><?php echo htmlspecialchars($recipe['title'] ?? ''); ?></h5>
            <?php if (!empty($recipe['thumb'])): ?>
              <img src="<?php echo htmlspecialchars($recipe['thumb']); ?>" class="img-fluid rounded my-3" alt="Tarif görseli">
            <?php endif; ?>
          </div>

          <form action="delete_recipe.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($recipe['id'] ?? ''); ?>">
            <div class="d-grid gap-2">
              <button type="submit" name="confirm_delete" class="btn btn-danger btn-lg">Evet, Sil</button>
              <a href="my_recipes.php" class="btn btn-secondary">Vazgeç</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
