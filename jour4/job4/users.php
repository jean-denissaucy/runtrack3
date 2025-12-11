<?php
header('Content-Type: application/json');

//connexion
$host = 'localhost';
$dbname = 'utilisateurs';
$username = 'root';
$password = '';

try {
    //base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête
    $query = "SELECT id, nom, prenom, email FROM utilisateurs";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    //résultats
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage JSON
    echo json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
} catch (PDOException $e) {

    //erreurs
    http_response_code(500);
    echo json_encode([
        'error' => 'Erreur de connexion à la base de données',
        'message' => $e->getMessage()
    ]);
}
