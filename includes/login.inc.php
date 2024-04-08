<?php
session_start();
include "dbhforlogin.inc.php";


if(isset($_POST['username']) && isset($_POST['password'])){

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if (empty($username)) {
    header ("Location: index.html?error=Username is required");
    exit(); 
} else if (empty($password)) {
    header ("Location: index.html?error=Password is required");
    exit(); 
}

$sql = "'SELECT * FROM  users where username = $username'
 AND user_password = $password";

 //connects to database and retirieves query
$result = connecttodb($pdo, $sql);

if($result === 1) {
    $row = ($result);
    if ($row['username']=== $username && $row['user_password'] === $password) {
        echo "Logged in";
        $SESSION['username'] = $row['username'];
        $SESSION['name'] = $row['name'];
        header("Location: index.html");
        exit();

    } else {
        header("Location: index.html?error=Incorrect Username or Password");
    }
}


//THROWs an error due to currently unknown reasons, need help from more experienced developer.