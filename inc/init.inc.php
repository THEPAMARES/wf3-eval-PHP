<?php 

// Connexion à la BDD

$dsn = 'mysql:dbname=wf3_php_intermediaire_pamela;host=localhost;charset=UTF8';
$user = 'root';
$password = '';

try {
    $bdd = new PDO($dsn, $user, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
    exit();
}


// Demarrer la session

session_start();

// Initialiser la variable $msg

$msg = "";


// On définit l'URL du site web




define("UPLOADS_FILES", $_SERVER["DOCUMENT_ROOT"] . "/php-1122/16-eval-php-tavares-pamela/uploads"); // Constante pour acceder au fichier de téléchargement en écriture
define("URL", "http://localhost/php-1122/16-eval-php-tavares-pamela");

