<?php
if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
?>

    <h3>Post Something</h3>

    <form action="../includes/blog_insert.inc.php" method="post">
        <input type=" text" name="title" placeholder="title">
        <input type="text" name="content" placeholder="Content">
        <button>Post</button>
    </form>
<?php
} else {
    echo "Please log in to interact with this feature.";
}
?>
<?php
echo '<h3>Blog user posts</h3>';

require_once('dbh.inc.php');
$query = 'SELECT title, content, posted FROM blog';
$rows = $pdo->query($query);
$result = $rows->fetchAll();
echo "<table class='table table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>Title</th>";
echo "<th>Content</th>";
echo "<th>Posted</th>";
echo "</tr>";
echo "</thead>";
foreach ($result as $rows) :
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $rows['title'] . "</td>";
    echo "<td>" . $rows['content'] . "</td>";
    echo "<td>" . $rows['posted'] . "</td>";
    echo "</tr>";
    echo "</tbody>";
endforeach;
echo "</table>";
