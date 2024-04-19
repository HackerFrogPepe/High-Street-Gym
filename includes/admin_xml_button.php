<?php
if (isset($_SESSION['user_id']) && !isset($_SESSION['admin'])) {
    echo "Click here to upload an XML document " . htmlspecialchars($_SESSION['username']) . "!";
?>
    <a class="btn btn-secondary" href="includes\admin_xml_insert.php" role="button"> XML Upload</a>
<?php
} else {
    echo "Please log in to interact with this feature.";
}
?>