<?php

require '../config/db.conf.php'; // Gegevens halen uit het bestand 

$dsn = "mysql:host=$host;dbname=$db;charset=$charset"; // Waar de database staat 

$options = [ // Instellingen 
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try { // Verbinding maken met database met de instellingen hierboven
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) { // Foutmelding als iets misgaat
    echo 'Verbinding mislukt: ' . $e->getMessage();
}
