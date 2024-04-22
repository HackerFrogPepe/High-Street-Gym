<?php
include_once("../includes/dbh.inc.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['xml_file'])) {
    $xmlFile = $_FILES['xml_file']['tmp_name'];
    $xml = simplexml_load_file($xmlFile);

    try {
        foreach ($xml->user as $user) {
            $user_id = $user->id;

            $stmt = $pdo->prepare("SELECT user_id FROM users WHERE user_id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            // Fetch the results
            $pk_result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($pk_result) {
                continue;
            }

            $first_name = $user->last_name;
            $last_name = $user->last_name;
            $username = $user->username;
            $_admin = $user->admin;
            $_password = $user->password;

            $stmt = $pdo->prepare("INSERT INTO users (user_id, first_name, last_name, username, admin, password) VALUES ('$user_id, $first_name, $last_name, $username, $admin, $password')");
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':admin', $admin);
            $stmt->bindParam(':password', $password);;
            $stmt->execute();
        }

        header("Location: ../index.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
