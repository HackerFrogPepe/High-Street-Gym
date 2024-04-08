<?php

# function made to connect login to database, this is not the best method but time constraints don't allow for other solutions.
function connecttodb() {
$dsn = "mysql:host=localhost;dbname=mobile_hour";
$dbusername = "root";
$dbpassword = "";


try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}
}