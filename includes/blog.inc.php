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

try {
    require_once('dbh.inc.php');
    $query = 'SELECT * FROM blog';
    $rows = $pdo->query($query);
    $rows = $rows->fetchAll();
    $errors = $pdo->errorInfo();
    if (isset($errors[2])) {
        print_r($errors);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
if (!isset($errors[2])) {
    print_r($rows);
    //Can format if required
}
