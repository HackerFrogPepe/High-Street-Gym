<?php

# data base handler connecting web application to the database

$dsn = "mysql:host=localhost;dbname=high-street-gym";
$dbusername = "root";
$dbpassword = "";


try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}
