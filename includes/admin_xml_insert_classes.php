<?php
include_once("../includes/dbh.inc.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $xmlFile = $_FILES['xml_file']['tmp_name'];
    $xml = simplexml_load_file($xmlFile);
    echo ($xml);

    try {
        foreach ($xml->classlist as $classlist) {
            $class_id = $classlist->class_id;
            $trainer_first_name = $classlist->trainer_first_name;
            $trainer_last_name = $classlist->trainer_last_name;
            $class_name = $classlist->class_name;
            $class_time = $classlist->class_time;


            $stmt = $pdo->prepare("INSERT INTO classlist ('class_id','trainer_first_name', 'trainer_last_name', 'class_name', 'class_time') VALUES ('$class_id, $trainer_first_name, $trainer_last_name, $class_name, $class_time')");
            $stmt->bindValue(':class_id', $class_id);
            $stmt->bindValue(':trainer_first_name', $trainer_first_name);
            $stmt->bindValue(':trainer_last_name', $trainer_last_name);
            $stmt->bindValue(':class_name', $class_name);
            $stmt->bindValue(':class_time', $class_time);
            $stmt->execute();
        }

        //SHOULD UPLAD TO DATABASE OR RETURN FEEDBACK...

        // header("Location: ../index.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
