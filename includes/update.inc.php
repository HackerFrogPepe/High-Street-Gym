<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $featureid = $_POST['featureid'];
    $productname = $_POST['productname'];
    $productmodel = $_POST['productmodel'];
    $manufacturer = $_POST['manufacturer'];
    $price = $_POST['price'];

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE product SET feature_id, product_name, product_model, manufacturer, price)
         VALUES (:feature_id, :product_name, :product_model, :manufacturer, :price)";

        // Prepare the statement
        $stmt = $pdo->prepare($query);

        // Bind values to placeholders
        $stmt->bindParam(':feature_id', $featureid);
        $stmt->bindParam(':product_name', $productname);
        $stmt->bindParam(':product_model', $productmodel);
        $stmt->bindParam(':manufacturer', $manufacturer);
        $stmt->bindParam(':price', $price);

        // Execute the statement
        $stmt->execute();


        // Send the user back to the front page
        header("Location: ../index.html");

        // Close the connection and statement
        $pdo = null;
        $statement = null;

        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
}