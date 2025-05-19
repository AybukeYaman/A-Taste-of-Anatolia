<?php
session_start();
include('includes/db.php');
include('includes/auth.php');

$recipes = [];

$stmt = $conn->prepare("SELECT * FROM recipes WHERE user_id = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $recipes[] = $row;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tariflerim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include('includes/navbar.php'); ?>

<div class="container mt-5">
    <h3 class="mb-4">Tariflerim</h3>

    <!-- Silme sonrası bilgi -->
    <?php if (isset($_GET['success']) && $_GET['success'] === 'silindi'): ?>
        <div class="alert alert-success">Tarif başarıyla silindi.</div>
    <?php endif; ?>

    <!-- Tarif yoksa bilgi -->
    <?php if (empty($recipes)): ?>
        <div class="alert alert-info">Henüz hiç tarif eklemediniz.</div>
    <?php else: ?>
        <div class="row">
            <?php foreach ($recipes as $recipe): ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($recipe['title']); ?></h5>
                            <p class="card-text"><strong>Malzemeler:</strong><br><?php echo nl2br(htmlspecialchars($recipe['ingredients'])); ?></p>
                            <p class="card-text"><strong>Yapılış:</strong><br><?php echo nl2br(htmlspecialchars($recipe['steps'])); ?></p>
                            <p class="text-muted"><small>Eklenme Tarihi: <?php echo $recipe['created_at']; ?></small></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="recipe.php?id=<?php echo $recipe['id']; ?>" class="btn btn-outline-info btn-sm">Detay</a>
                            <div class="d-flex gap-2">
                                <a href="edit_recipe.php?id=<?php echo $recipe['id']; ?>" class="btn btn-sm btn-primary">Düzenle</a>
                                <a href="delete_recipe.php?id=<?php echo $recipe['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
