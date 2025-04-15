<?php

require_once('../../private/initialize.php');
$id = $_GET['id'] ?? '1'; // PHP > 7.0


if(is_post_request()){
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'];
    $salamander['habitat'] = $_POST['habitat'];
    $salamander['description'] = $_POST['description'];

    $result = update_salamander($salamander);
    if($result === true) {
        redirect_to(url_for('salamanders/show.php?id=' . $id));
        }
        else {
            $errors = $result;
            //var_dump($errors);
        }
    }
   else {
    $salamander = find_salamander_by_id($id);
   }

   if (!$salamander) {
    echo "<p>Salamander not found.</p>";
    echo "<p><a href='" . url_for('/salamanders/index.php') . "'>&laquo; Back to Salamander List</a></p>";
    include(SHARED_PATH . '/salamander-footer.php');
    exit();
}

include(SHARED_PATH . '/salamander-header.php');
echo "<h1>Stub for Edit Salamander</h1>";

?>
<?php echo display_errors($errors); ?>
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
