<?php
declare(strict_types=1);

// Paramètres habituels d'une installation XAMPP locale.
$hote = '127.0.0.1';
$nomBase = 'coup_de_propre';
$utilisateur = 'root';
$motDePasse = '';

$dsn = "mysql:host={$hote};dbname={$nomBase};charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $utilisateur, $motDePasse, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $exception) {
    error_log($exception->getMessage());

    http_response_code(500);
    exit('Connexion à la base de données impossible. Vérifiez sa configuration.');
}