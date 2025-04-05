<?php

require_once('../../private/initialize.php');
$id = $_GET['id'] ?? '1'; // PHP > 7.0


if(is_post_request()){
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['names'] = $_POST['name'];
    $salamander['habitat'] = $_POST['habitat'];
    $salamander['description'] = $_POST['description'];

    $result = update_salamander($salamander);
    redirect_to(url_for("salamanders/show.php?id=" . $id));
}
else {
    $salamander = find_all_salamanders_by_id($id);
}
include(SHARED_PATH . '/salamander-header.php');
echo "<h1>Stub for Edit Salamander</h1>";

?>
<form action="<?php echo url_for('salamanders/edit.php?id=' .h(u($id)));?>" method="post">
<label>Salamander name:</label><br>
<input type="text" name="name" value="<?php echo h($salamander['name']);?>"><br>
<label>Habitat:</label><br>
<textarea rows="4" cols="30" name="habitat"><?php echo h($salamander['habitat']); ?></textarea><br>
<label>Description:</label><br>
<textarea rows="5" cols="30" name="description"><?php echo h($salamander['description']); ?></textarea><br>
<input type="submit" value="submit salamander">
</form>

<?php
    include(SHARED_PATH . '/salamander-footer.php'); ?>
