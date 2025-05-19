<?php include('includes/header.php'); ?>

<!-- Tarif Detayı Sayfası - Responsive Bootstrap Yapı -->

<div class="container py-5">
  <div class="row">
    <div class="col-lg-8 mx-auto">

      <div class="mb-4 text-center">
        <h1 class="display-4"><?php echo htmlspecialchars($recipe['title'] ?? 'Tarif Başlığı'); ?></h1>
        <p class="text-muted">Yayınlanma Tarihi: <?php echo date('d.m.Y', strtotime($recipe['created_at'] ?? 'now')); ?></p>
      </div>

      <!-- Görsel -->
      <?php if (!empty($recipe['thumb'])): ?>
        <img src="<?php echo htmlspecialchars($recipe['thumb']); ?>" class="img-fluid rounded mb-4" alt="Tarif Görseli">
      <?php endif; ?>

      <!-- Malzemeler -->
      <div class="mb-4">
        <h4 class="fw-bold">Malzemeler</h4>
        <p><?php echo nl2br(htmlspecialchars($recipe['ingredients'] ?? '')); ?></p>
      </div>

      <!-- Hazırlık Aşamaları -->
      <div class="mb-4">
        <h4 class="fw-bold">Hazırlanışı</h4>
        <p><?php echo nl2br(htmlspecialchars($recipe['steps'] ?? '')); ?></p>
      </div>

      <!-- Video -->
      <?php if (!empty($recipe['video_path'])): ?>
        <div class="mb-4">
          <h4 class="fw-bold">Tarif Videosu</h4>
          <video controls class="w-100 rounded">
            <source src="<?php echo htmlspecialchars($recipe['video_path']); ?>" type="video/mp4">
            Tarayıcınız video etiketini desteklemiyor.
          </video>
        </div>
      <?php endif; ?>

      <!-- Beğeni ve Yorum Alanı (AJAX ile entegre edilecek) -->
      <div class="mt-5">
        <div class="d-flex align-items-center justify-content-between">
          <h4 class="mb-3">Yorumlar</h4>
          <button class="btn btn-outline-danger btn-sm" id="likeButton">
            ❤️ Beğen (<span id="likeCount"><?php echo $like_count ?? 0; ?></span>)
          </button>
        </div>

        <!-- Yorum Ekle Formu -->
        <form id="commentForm" method="POST" class="mb-4">
          <div class="mb-3">
            <label for="commentText" class="form-label">Yorumunuz</label>
            <textarea id="commentText" class="form-control" rows="3" required></textarea>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Gönder</button>
          </div>
        </form>

        <!-- Yorum Listesi -->
        <ul class="list-group" id="commentList">
          <?php foreach ($comments as $comment): ?>
            <li class="list-group-item">
              <strong><?php echo htmlspecialchars($comment['user_name']); ?>:</strong>
              <span><?php echo htmlspecialchars($comment['body']); ?></span>
              <br>
              <small class="text-muted"><?php echo date('d.m.Y H:i', strtotime($comment['created_at'])); ?></small>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>

    </div>
  </div>
</div>

<script src="assets/comments.js"></script>
<script src="assets/likes.js"></script>

<?php include('includes/footer.php'); ?>