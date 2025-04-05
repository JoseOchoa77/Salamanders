<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php'); 
$pageTitle = 'Edit Salamander';
$id = $_GET['id'];

// need to remove this line but right now it works.
$salamander = find_salamander_by_id($id);
if(is_post_request()) {
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';
    // show that $result is not neceessary
    
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

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
