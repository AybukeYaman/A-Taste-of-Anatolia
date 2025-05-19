<?php
session_start();
include('includes/db.php');

$recipe_id = $_GET['id'] ?? null;
$recipe = null;
$error = "";

// 1. ID kontrolü
if (!$recipe_id) {
    $error = "Tarif bulunamadı.";
} else {
    // 2. Tarif detayını çek
    $stmt = $conn->prepare("SELECT r.*, u.username FROM recipes r JOIN users u ON r.user_id = u.id WHERE r.id = ?");
    $stmt->bind_param("i", $recipe_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $recipe = $result->fetch_assoc();
    } else {
        $error = "Tarif bulunamadı veya silinmiş.";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tarif Detayı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include('includes/navbar.php'); ?>

<div class="container mt-5">
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php elseif ($recipe): ?>
        <h2 class="mb-3"><?php echo htmlspecialchars($recipe['title']); ?></h2>
        <p><strong>Yazan:</strong> <?php echo htmlspecialchars($recipe['username']); ?></p>
        <hr>
        <h5>Malzemeler:</h5>
        <p><?php echo nl2br(htmlspecialchars($recipe['ingredients'])); ?></p>

        <h5>Yapılış:</h5>
        <p><?php echo nl2br(htmlspecialchars($recipe['steps'])); ?></p>

        <p class="text-muted"><small>Eklenme Tarihi: <?php echo $recipe['created_at']; ?></small></p>
        <a href="home.php" class="btn btn-secondary mt-3">← Ana Sayfaya Dön</a>
    <?php endif; ?>
</div>
</body>
</html>
