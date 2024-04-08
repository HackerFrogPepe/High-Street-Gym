<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productid = $_POST['productid'];
    $featureid = $_POST['featureid'];
 

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM product WHERE (product_id, feature_id)
         VALUES (:product_id, :feature_id)";

        // Prepare the statement
        $stmt = $pdo->prepare($query);

        // Bind values to placeholders
        $stmt->bindParam(':product_id', $productid);
        $stmt->bindParam(':feature_id', $featureid);
    
        // Execute the statement
        $stmt->execute();


        // Send the user back to the front page
        header("Location: ../index.html");

        // Close the connection and statement
        $pdo = null;
        $statement = null;

    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
}