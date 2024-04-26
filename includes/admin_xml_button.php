<?php
if (isset($_SESSION['user_id']) && ($_SESSION['is_admin'] == 1)) {
    echo "Click here to upload an XML document " . htmlspecialchars($_SESSION['username']) . "!";
?>
    <h2>Add classes from XML File</h2>
    <form action="includes/admin_xml_insert_classes.php" method="POST" enctype="multipart/form-data">
        <label class="form-label" for="XMLFile">Import XML File</label>
        <!-- name is the value passed to the addnewemployee.php file for processing -->
        <input type="file" class="form-control" name="xml_file" id="XMLFile" accept=".xml" />
        <input type="submit" name="submit" value="Import XML" />
    </form>
<?php
} else {
    echo "Please log in to interact with this feature.";
}
?>