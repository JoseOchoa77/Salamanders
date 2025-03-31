<?php require_once('../../private/initialize.php'); 
include(SHARED_PATH . '/salamander-header.php');
echo "<h1>Stub for New Salamander</h1>";
?>

<form action="create.php" method="post">
<label>Salamander name:</label><br>
<input type="text" name="name"><br>
<label>Habitat:</label><br>
<textarea rows="4" cols="30" name="habitat"></textarea><br>
<label>Description:</label><br>
<textarea rows="5" cols="30" name="description"></textarea><br>
<input type="submit" value="submit salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
