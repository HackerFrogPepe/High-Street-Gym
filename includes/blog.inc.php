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
    </form>
<?php
} else {
    echo "Please log in first to see this page.";
}
?>