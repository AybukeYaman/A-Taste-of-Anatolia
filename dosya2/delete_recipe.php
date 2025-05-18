<?php
// ✅ 1. Oturumu başlat ve bağlantıyı ekle
session_start();
include('includes/db.php');
include('includes/auth.php');

// ✅ 2. Kullanıcı ID'si ve Tarif ID'si kontrolü
$user_id = $_SESSION['user_id'] ?? null;
$recipe_id = $_GET['id'] ?? null;

// ❗ Eğer kullanıcı giriş yapmamışsa veya tarif ID yoksa yönlendir
if (!$user_id || !$recipe_id) {
    header("Location: my_recipes.php");
    exit();
}

// ✅ 3. Bu tarif gerçekten bu kullanıcıya mı ait?
$stmt = $conn->prepare("SELECT id FROM recipes WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $recipe_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();

// ❗ Tarif yoksa ya da başkasına aitse yönlendir
if ($result->num_rows !== 1) {
    header("Location: my_recipes.php?error=yetkisiz");
    exit();
}

// ✅ 4. Silme işlemini yap
$delete = $conn->prepare("DELETE FROM recipes WHERE id = ? AND user_id = ?");
$delete->bind_param("ii", $recipe_id, $user_id);
$delete->execute();

// ✅ 5. Silme başarılı → liste sayfasına başarı mesajı ile dön
header("Location: my_recipes.php?success=silindi");
exit();
?>
