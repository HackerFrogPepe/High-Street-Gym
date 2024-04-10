<?php
include "dbh.inc.php";

session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();
    } else if (empty($pass)) {

        header("Location: index.php?error=Password is required");

        exit();
    } else {

        $sql = "SELECT * FROM member WHERE user_name='$username' AND password='$user_password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $username && $row['password'] === $user_password) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();
            } else {

                header("Location: index.php?error=Incorect User name or password");

                exit();
            }
        } else {

            header("Location: index.php?error=Incorect User name or password");

            exit();
        }
    }
} else {

    header("Location: index.php");

    exit();
}


//THROWs an error due to currently unknown reasons, need help from more experienced developer.