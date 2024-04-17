
    <?php
    if (isset($_SESSION['user_id']) && isset($_SESSION['admin'])) {
        echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
    ?>
    <?php
    } else {
        echo "Please log in to interact with this feature.";
    }
    ?>