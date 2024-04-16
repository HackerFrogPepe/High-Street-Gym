<?php
if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
?>
    <!--NEED INSERT FOR SIGNUP IN THIS PAGE HERE!-->

    <!-- 
    <h3>Book a class here!</h3>

    <form action="../includes/blog_insert.inc.php" method="post">
        <input type=" text" name="title" placeholder="title">
        <input type="text" name="content" placeholder="Content">
        <button>Post</button>
    </form> -->
<?php
} else {
    echo "Please log in first to see this page.";
}
?>
<?php
echo '<h3>Class List</h3>';

try {
    require_once('dbh.inc.php');
    $query = 'SELECT * FROM classlist';
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
