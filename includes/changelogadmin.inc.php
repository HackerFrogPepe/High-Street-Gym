
<?php
echo '<h3?>Database</h3?';

try {
    require_once('dbh.inc.php');
    $query = 'SELECT * FROM changelog';
    $rows = $pdo->query($query);
    $rows = $rows->fetchAll();
    $errors = $pdo->errorInfo();
    if(isset($errors[2])){
        print_r($errors);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

if(!isset($errors[2])){
    print_r($rows);
}