<?php session_start();

if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    echo ('here');
    $content = $_POST['content'];
    $title = $_POST['title'];

    require_once "dbh.inc.php";

    $query = "INSERT INTO blog (content, title)
VALUES (:content, :title)";

    // Prepare the statement
    $stmt = $pdo->prepare($query);

    // Bind values to placeholders
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':title', $title);


    // Execute the statement
    $stmt->execute();

    // Send the user back to the front page
    header("Location: ../pages/blog.php");

    // Close the connection and statement
    $pdo = null;
    $statement = null;

    die();
} else {
    die();
}
