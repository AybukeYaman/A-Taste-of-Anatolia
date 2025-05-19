<?php
session_start();
include('includes/db.php');
include('includes/auth.php');

$recipe_id = $_GET['id'] ?? null;
$error = "";
$success = "";

// Tarif bilgilerini çek
if ($recipe_id) {
    $stmt = $conn->prepare("SELECT * FROM recipes WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $recipe_id, $_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $recipe = $result->fetch_assoc();

    if (!$recipe) {
        $error = "Tarif bulunamadı veya erişim izniniz yok.";
    }
} else {
    $error = "Geçersiz istek.";
}

// Form gönderildiyse
if ($_SERVER["REQUEST_METHOD"] == "POST" && $recipe_id) {
    $title = trim($_POST['title']);
    $ingredients = trim($_POST['ingredients']);
    $steps = trim($_POST['steps']);

    if (empty($title) || empty($ingredients) || empty($steps)) {
        $error = "Lütfen tüm alanları doldurun.";
    } else {
        $stmt = $conn->prepare("UPDATE recipes SET title = ?, ingredients = ?, steps = ? WHERE id = ? AND user_id = ?");
        $stmt->bind_param("sssii", $title, $ingredients, $steps, $recipe_id, $_SESSION['user_id']);
        if ($stmt->execute()) {
            $success = "Tarif başarıyla güncellendi.";
            // Güncellenen veriyi tekrar al
            $recipe['title'] = $title;
            $recipe['ingredients'] = $ingredients;
            $recipe['steps'] = $steps;
        } else {
            $error = "Bir hata oluştu.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tarifi Düzenle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include('includes/navbar.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center mb-4">Tarifi Düzenle</h3>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php elseif (!empty($success)): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php endif; ?>

            <?php if (!empty($recipe)): ?>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Başlık</label>
                    <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($recipe['title']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Malzemeler</label>
                    <textarea name="ingredients" class="form-control" rows="4" required><?php echo htmlspecialchars($recipe['ingredients']); ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Yapılış</label>
                    <textarea name="steps" class="form-control" rows="6" required><?php echo htmlspecialchars($recipe['steps']); ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Kaydet</button>
            </form>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
