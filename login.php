<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Giriş Yap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6 bg-white p-4 shadow rounded">
        <h3 class="text-center mb-4">Giriş Yap</h3>
        <form action="login.php" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">E-posta</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Şifre</label>
            <input type="password" name="password" id="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
