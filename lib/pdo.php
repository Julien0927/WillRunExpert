<?php

/* define('DB_HOST', 'localhost');
define('DB_NAME', 'willrunexpert');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=utf8';

try {
    // On se connecte à la base de données en instanciant un objet PDO
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);

    //On definit le charset à "utf8" pour communiquer avec la base de données
    $db->exec('SET NAMES utf8');

    //On définit la methode de récupération des données par défaut
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
} */

try {
    

/*$pdo = new PDO ('mysql:host=localhost; dbname=julienvarachas_; port=3306; charset=utf8mb4', 'root', '');*/
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} 
catch (PDOException $e){
    echo 'erreur de connexion à la base de données' . $e -> getMessage();
}
