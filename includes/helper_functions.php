<?php
function is_admin()
{ {
        require_once('includes/dbh.inc.php');
        $query = 'SELECT username, admin FROM users';
        $rows = $pdo->query($query);
        $result = $rows->fetchAll();
        foreach ($result as $rows) :
            echo "<table class='table table-striped'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Employee Name</th>";
            echo "<th>Department</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $rows['username'] . "</td>";
            echo "<td>" . $rows['admin'] . "</td>";
            echo "</tr>";
            echo "</tbody>";
        endforeach;
        echo "</table>";

        if (isset($admin)) {
            $admin == 0;
            echo 'true';
        }
    }
}


//     if ($rows == 0) {
//         echo "it works";
//     } else {
//         echo "it does not work";
//     }
// };
