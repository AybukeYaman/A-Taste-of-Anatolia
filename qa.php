<?php include('includes/header.php'); ?>

<!-- Soru-Cevap Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row mb-5">
    <div class="col text-center">
      <h1 class="display-4 fw-bold">Soru & Cevap</h1>
      <p class="lead">Tarifler, diyetler veya mutfak tüyoları hakkında sorularınızı sorun, topluluktan yanıt alın!</p>
    </div>
  </div>

  <!-- Soru Ekleme Formu -->
  <div class="row justify-content-center mb-5">
    <div class="col-md-10 col-lg-8">
      <div class="card shadow-sm">
        <div class="card-body">
          <form method="POST" action="qa.php">
            <div class="mb-3">
              <label for="question" class="form-label">Sorunuzu Yazın</label>
              <textarea class="form-control" id="question" name="question" rows="4" placeholder="Örneğin: Kısır yaparken bulguru önceden ıslatmalı mıyım?" required></textarea>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Soruyu Paylaş</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Soru-Cevap Listesi -->
  <div class="row g-4">
    <?php foreach ($qaList as $qa): ?>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">❓ <?php echo htmlspecialchars($qa['question']); ?></h5>
            <hr>
            <p class="card-text">
              <?php echo htmlspecialchars($qa['answer'] ?? 'Henüz yanıtlanmadı.'); ?>
            </p>
            <p class="text-muted small mt-auto"><?php echo date('d.m.Y', strtotime($qa['created_at'])); ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <?php if (empty($qaList)): ?>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="alert alert-info">Henüz soru eklenmemiş.</div>
      </div>
    </div>
  <?php endif; ?>
</div>

<?php include('includes/footer.php'); ?>