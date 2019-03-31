<?php

    // Connexion BDD
    $pdo = new PDO(
        'mysql:host=localhost;dbname=loginapp',
        'root',
        '',
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // implementé encodage utf8
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // définir fetch-> en mode tableau assoc par default
        )
        );

    if(!$pdo) {
        die("Database connection failed");
    }

?>