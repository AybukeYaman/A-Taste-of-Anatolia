<?php
session_start();
include('includes/db.php');

$error = "";
$success = "";

// Form gönderildiyse
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Alanlar boş mu kontrol et
    if (empty($name) || empty($email) || empty($password)) {
        $error = "Lütfen tüm alanları doldurun.";
    } else {
        // E-posta daha önce kullanılmış mı?
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Bu e-posta adresi zaten kayıtlı.";
        } else {
            // Şifreyi hashle
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Yeni kullanıcıyı ekle
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashed_password);

            if ($stmt->execute()) {
                $success = "Kayıt başarılı! Giriş yapabilirsiniz.";
            } else {
                $error = "Bir hata oluştu. Lütfen tekrar deneyin.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include('includes/navbar.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center mb-4">Kayıt Ol</h3>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php elseif (!empty($success)): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">İsim</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">E-Posta</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Şifre</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Kayıt Ol</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
