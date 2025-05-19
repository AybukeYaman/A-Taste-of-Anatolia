<?php include('includes/header.php'); ?>

<!-- Kalori Bilgi Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row mb-5">
    <div class="col text-center">
      <h1 class="display-4 fw-bold">Besin Kalori Değerleri</h1>
      <p class="lead">100 gram üzerinden yaklaşık kalori miktarlarını aşağıda bulabilirsiniz.</p>
      <form method="GET" action="calories.php" class="d-flex justify-content-center mt-4">
        <input type="text" class="form-control w-50 me-2" name="q" placeholder="Besin ara: elma, bulgur, yoğurt...">
        <button type="submit" class="btn btn-outline-success">Bul</button>
      </form>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Besin Adı</th>
              <th scope="col">Kalori (kcal/100g)</th>
            </tr>
          </thead>
          <tbody>
            <?php $count = 1; foreach ($foods as $food): ?>
              <tr>
                <th scope="row"><?php echo $count++; ?></th>
                <td><?php echo htmlspecialchars($food['food_name']); ?></td>
                <td><?php echo htmlspecialchars($food['kcal_per_100g']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <?php if (empty($foods)): ?>
        <div class="alert alert-info text-center">Aradığınız besin bulunamadı.</div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>