
<?php
require_once('dbh.inc.php');

if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
} else {
    echo "Please log in first to see this page.";
}
