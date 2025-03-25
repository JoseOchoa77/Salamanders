<?php require_once('../../private/initialize.php'); 

if(!isset($_GET['id'])) {
    redirect_to(url_for('/salamanders/index.php'));
}
$id = $_GET['id']; 
$page_title = 'Edit Salamander';
$salamander_name = '';
$position = '';
$visible = '';

if(is_post_request()) {
    // Handle form values sent by new.php

    $salamander_name = $_POST['salamander_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form parameters<br>";
    echo "Salamander name: ". $salamander_name ."<br>";
    echo "Position: ".$position." <br>";
    echo "Visible: ".$visible."<br>";
}

include(SHARED_PATH . '/salamander-header.php'); 
?>

<h2>Edit Salamander</h2>
<form action="<?= url_for('/salamanders/edit.php?id='. h(u($id))); ?>" method="post">
    <label>Name</label><br>
    <input type="text" name="salamander_name" value="<?php echo $salamander_name; ?>"><br>
    <input type="submit" value="edit salamander">
</form>
<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
