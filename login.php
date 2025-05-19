<?php
// Oturum başlat (her zaman ilk satırda)
session_start();
include('includes/db.php');

$error = "";

// Form gönderildiyse
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "Lütfen tüm alanları doldurun.";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['name']; // 🔥 navbar'da gösterilecek

                header("Location: home.php");
                exit();
            } else {
                $error = "Hatalı şifre.";
            }
        } else {
            $error = "Böyle bir kullanıcı bulunamadı.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include('includes/navbar.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="text-center mb-4">Giriş Yap</h3>

            <!-- Hata mesajı -->
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <!-- Giriş formu -->
            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">E-Posta</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Şifre</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
