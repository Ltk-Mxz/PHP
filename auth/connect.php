<?php
$host = "localhost";
$user = "root";
$pass = "<I-LOVE-PHP-AND-YOU-?>";
$db = "login";

$conn = new mysqli($host, $user, $pass, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}
?>