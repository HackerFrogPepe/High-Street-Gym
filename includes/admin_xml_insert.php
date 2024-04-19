
<?php
echo "beat it loser";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';


    // ERROR HANDLERS
    $errors = [];

    if (is_input_empty($username, $password)) {
        $errors["empty_input"] = "Fill in all fields!";
    }

    $result = get_user($pdo, $username);

    if (is_username_wrong($result)) {
        $errors["login_incorrect"] = "Incorrect login info!";
    }
    if (is_username_wrong($result) && is_password_wrong($password, $result["password"])) {
        $errors["login_incorrect"] = "Incorrect login info!";
    }

    if ($errors) {
        $_SESSION["errors_login"] = $errors;

        header("Location: ../index.php");
        die();
    }
} else {
    header("Location: ../index.php");
    die();
}

//TO DO
//redirect if not using post method
//set up password and username that reads from database as verification on page
//create xml uploads for classes and blog/users
//fix Class upload
//hash passwords uing sha(p352)

//DONE
//fix db foreign keys (DONE)
