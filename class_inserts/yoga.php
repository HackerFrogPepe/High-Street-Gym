<?php session_start();

if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    $booking_id = 1;
    $class_id = 1;
    $user_id = $_SESSION['user_id'];
    $class_name = "yoga";
    $username = $_SESSION['username'];

    require_once "../includes/dbh.inc.php";

    $query = "INSERT INTO bookings (booking_id, class_id, user_id, class_name, username)
    VALUES (:booking_id,:class_id, :user_id :class_name, :username)";

    // Prepare the statement
    $stmt = $pdo->prepare($query);

    // Bind values to placeholders

    $stmt->bindValue(':booking_id', $booking_id);
    $stmt->bindValue(':class_id', $class_id);
    $stmt->bindValue(':user_id', $user_id);
    $stmt->bindValue(':class_name', $class_name);
    $stmt->bindValue(':username', $username);


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
