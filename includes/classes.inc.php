<?php
if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username'] . " " . "your USER ID is " . htmlspecialchars($_SESSION['user_id'])) . "!";
?>
    <h3>Book a class here!</h3>

    <form action="../includes/classes_insert_inc.php" method="post">
        <input type="text" name="class_id" placeholder="Class Id">
        <input type="text" name="user_id" placeholder="User Id">
        <button>Book</button>
    <?php
} else {
    echo "Please log in to interact with this feature.";
}
    ?>
    <?php
    echo '<h3>Class List</h3>';

    require_once('dbh.inc.php');
    $query = 'SELECT class_id, trainer_first_name, class_name, class_time FROM classlist';
    $rows = $pdo->query($query);
    $result = $rows->fetchAll();
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Class Id</th>";
    echo "<th>Trainer</th>";
    echo "<th>Class Name</th>";
    echo "<th>Class Time</th>";
    echo "</tr>";
    echo "</thead>";
    foreach ($result as $rows) :
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $rows['class_id'] . "</td>";
        echo "<td>" . $rows['trainer_first_name'] . "</td>";
        echo "<td>" . $rows['class_name'] . "</td>";
        echo "<td>" . $rows['class_time'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
    endforeach;
    echo "</table>";
    ?>


    <!-- 1. apply button using img to classes //coffeetime from cameron
2. fix xml upload should be close -->