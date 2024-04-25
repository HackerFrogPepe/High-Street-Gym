
<?php session_start();
require_once("../includes/dbh.inc.php");

echo "DOESNT CONNECT.........";
if (isset($_SESSION['user_id']) && (isset($_SESSION['is_class_id']))) {
    $class_id = $_SESSION['class_id'];
    $user_id = $_SESSION['user_id'];



    $query = "INSERT INTO bookings (class_id, user_id)
    VALUES (:class_id, :user_id)";

    // Prepare the statement
    $stmt = $pdo->prepare($query);

    // Bind values to placeholders
    $stmt->bindParam(':class_id', $class_id);
    $stmt->bindParam(':user_id', $user_id);


    // Execute the statement
    $stmt->execute();

    // Send the user back to the front page
    header("Location: ../pages/classes.php");

    // Close the connection and statement
    $pdo = null;
    $statement = null;

    die();
} else {
    header("Location: ../pages/classes.php");
    die();
}
