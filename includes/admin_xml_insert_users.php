<?php
include_once("../includes/dbh.inc.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $xmlFile = $_FILES['xml_file']['tmp_name'];
    $xml = simplexml_load_file($xmlFile);
    echo ($xml);

    try {
        foreach ($xml->user as $user) {
            $user_id = $user->user_id;
            $first_name = $user->first_name;
            $last_name = $user->last_name;
            $username = $user->username;
            $admin = $user->admin;
            $password = $user->password;

            //Hashes password on insertion to database
            $password = password_hash("$password", PASSWORD_DEFAULT);


            $stmt = $pdo->prepare("INSERT INTO users (user_id,first_name, last_name, username, admin, password) VALUES (:user_id, :first_name, :last_name, :username, :admin, :password)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':admin', $admin);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
        }

        header("Location: ../index.php");

        // header("Location: ../index.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
