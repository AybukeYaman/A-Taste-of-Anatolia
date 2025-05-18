<?php
// Oturum başlat (daha önce başlamadıysa)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Giriş yapılmamışsa login sayfasına yönlendir
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
