<?php
session_start();
include('includes/db.php');
include('includes/auth.php');

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $ingredients = trim($_POST['ingredients']);
    $steps = trim($_POST['steps']);
    $user_id = $_SESSION['user_id'] ?? null;

    if (empty($title) || empty($ingredients) || empty($steps)) {
        $error = "Lütfen tüm alanları doldurun.";
    } elseif (!$user_id) {
        $error = "Lütfen giriş yapın.";
    } else {
        $stmt = $conn->prepare("INSERT INTO recipes (user_id, title, ingredients, steps, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("isss", $user_id, $title, $ingredients, $steps);

        if ($stmt->execute()) {
            $success = "Tarif başarıyla eklendi!";
        } else {
            $error = "Bir hata oluştu: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tarif Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include('includes/navbar.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h3 class="mb-4 text-center">Yeni Tarif Ekle</h3>

            <?php if (!empty($success)): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php endif; ?>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">Tarif Başlığı</label>
                    <input type="text" name="title" class="form-control" placeholder="Örn: Çikolatalı Kek" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Malzemeler</label>
                    <textarea name="ingredients" class="form-control" rows="4" placeholder="Her satıra bir malzeme" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Yapılış Adımları</label>
                    <textarea name="steps" class="form-control" rows="5" placeholder="Tarifin hazırlanışı" required></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100">Tarifi Ekle</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
