<?php session_start();

if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    $class_id = $_POST['class_id'];
    $user_id = $_POST['user_id'];

    require_once "dbh.inc.php";

    $query = "INSERT INTO bookings(class_id, user_id)
    VALUES (:class_id, :user_id)";

    // Prepare the statement
    $stmt = $pdo->prepare($query);

    // Bind values to placeholders
    $stmt->bindValue(':class_id', $class_id);
    $stmt->bindValue(':user_id', $user_id);

    // Execute the statement
    $stmt->execute();

    header("Location: ../pages/classes.php");


    // Close the connection and statement
    $pdo = null;
    $statement = null;

    die();
} else {
    die();
};
