<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "onedio_";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
