<?php require_once('../../private/initialize.php');
if(is_post_request()) {
    $salamander = [];
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'];

    $result = insert_salamander($salamander);
    if($result === true){
        $newID = mysqli_insert_id($db);
        redirect_to(url_for('salamanders/show.php?id=' . $newID));
    }
    else {
        $errors = $result;
        }
}

include(SHARED_PATH . '/salamander-header.php');
echo "<h1>New Salamander</h1>";
?>
<?php echo display_errors($errors); ?>
<form action="<?php echo url_for('salamanders/new.php'); ?>" method="post">
<label>Salamander name:</label><br>
<input type="text" name="name"><br>
<label>Habitat:</label><br>
<textarea rows="4" cols="30" name="habitat"></textarea><br>
<label>Description:</label><br>
<textarea rows="5" cols="30" name="description"></textarea><br>
<input type="submit" value="submit salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
