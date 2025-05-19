<?php
session_start();

// Oturumu temizle
$_SESSION = [];           // Tüm session verilerini boşalt
session_unset();          // Oturumdaki değişkenleri sıfırla
session_destroy();        // Oturumu tamamen sonlandır

// Login sayfasına yönlendir
header("Location: login.php");
exit();
?>
