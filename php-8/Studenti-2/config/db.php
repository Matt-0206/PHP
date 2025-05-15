<?php
$host = 'localhost';
$db = 'mvc_studenti';
$user = 'root';
$pass = '';


$conn = "mysql:host=$host;dbname=$db";


try {
    $pdo = new PDO($conn, $user, $pass);
} catch (PDOException $e) {
    die("Errore connessione DB: " . $e->getMessage());
}
