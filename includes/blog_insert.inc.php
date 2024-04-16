<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    $content = $_POST['content'];
    $title = $_POST['title'];

    try {

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
        header(" Location: ../index.php");

        // Close the connection and statement
        $pdo = null;
        $statement = null;

        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
}
