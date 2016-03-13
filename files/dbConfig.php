<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'kys';
try {
    $db = new PDO('mysql:dbname=' . $dbName . ';host=' . $dbHost, $dbUser, $dbPass);
} catch (PDOException $e) {
    $e->getMessage();
    echo "cannot connect to database";
}