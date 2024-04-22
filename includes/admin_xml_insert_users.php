<?php
include_once("../includes/dbh.inc.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['xml_file'])) {
    $xmlFile = $_FILES['xml_file']['tmp_name'];
    $xml = simplexml_load_file($xmlFile) or die("ERROR: Cannot create SimpleXML object");

    try {
        $connection = $pdo("localhost", "root", "", "high_street_gym") or die("ERROR: Cannot connect");

        foreach ($xml->User as $User) {
            $id = $User->id;
            echo "$id";
            $first_name =  $User->first_name;
            $last_name = $Customer->last_name;
            $username = $Customer->username;
            $admin = $Customer->admin;
            $password = $Customer->password;

            $sql = "INSERT INTO users (id, first_name, last_name, admin, password) VALUES ('$id, $first_name, $last_name, $username, $admin, $password')";

            mysqli_query($connection, $sql) or die("ERROR: " . mysqli_error($connection) . " (query was $sql)"); //is there a pdo equivilant?
        }
        mysqli_close($connection);


        header("Location: ../index.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
};
