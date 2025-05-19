<?php include('includes/header.php'); ?>

<!-- Tarif Ekle Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

          <h1 class="text-center mb-4 display-5">Yeni Tarif Ekle</h1>

          <form action="add_recipe.php" method="POST" enctype="multipart/form-data" novalidate>

            <!-- Tarif Başlığı -->
            <div class="mb-3">
              <label for="title" class="form-label fw-semibold">Tarif Başlığı</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Örneğin: Mercimek Çorbası" required>
            </div>

            <!-- Malzemeler -->
            <div class="mb-3">
              <label for="ingredients" class="form-label fw-semibold">Malzemeler</label>
              <textarea class="form-control" name="ingredients" id="ingredients" rows="4" placeholder="Her satıra bir malzeme yazın" required></textarea>
            </div>

            <!-- Hazırlanışı -->
            <div class="mb-3">
              <label for="steps" class="form-label fw-semibold">Hazırlık Aşamaları</label>
              <textarea class="form-control" name="steps" id="steps" rows="6" placeholder="Tarifi adım adım anlatın" required></textarea>
            </div>

            <!-- Görsel -->
            <div class="mb-3">
              <label for="image" class="form-label">Tarif Fotoğrafı</label>
              <input class="form-control" type="file" name="image" id="image" accept="image/*">
            </div>

            <!-- Video (isteğe bağlı) -->
            <div class="mb-3">
              <label for="video" class="form-label">Video (İsteğe Bağlı)</label>
              <input class="form-control" type="file" name="video" id="video" accept="video/*">
            </div>

            <!-- Kaydet Butonu -->
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-success btn-lg">Tarifi Kaydet</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Mobil ve tablet uyumu için boşluk ekle -->
<div class="my-5"></div>

<?php include('includes/footer.php'); ?>
