<?php
// Paramètres de connexion
$host = "localhost";
$username = "root";
$password = "ichrak";
$dbname = "chef_cuisine";

// Connexion à la base de données avec MySQLi procédural
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
} else {
    // echo "Connexion : OK";
}


?>
