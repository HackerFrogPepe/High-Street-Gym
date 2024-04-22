<?php session_start();

if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    $class_id = $_POST['class_id'];
    $user_id = $_POST['user_id'];
    $classname = $_POST['class_name'];
    $username = $_POST['username'];

    require_once "dbh.inc.php";

    $query = "INSERT INTO bookings (class_id, user_id, class_name, username)
    VALUES (:class_id, :user_id, :classname, :username)";

    // Prepare the statement
    $stmt = $pdo->prepare($query);

    // Bind values to placeholders
    $stmt->bindParam(':class_id', $class_id);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':classname', $classname);
    $stmt->bindParam(':username', $username);


    // Execute the statement
    $stmt->execute();

    // Send the user back to the front page
    header("Location: ../pages/classes.php");

    // Close the connection and statement
    $pdo = null;
    $statement = null;

    die();
} else {
    die();
}
