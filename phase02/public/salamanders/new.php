<?php require_once('../../private/functions.php');

$test = $_GET['test'] ?? '';

if($test == "404") {
    error_404();
}

elseif($test == "500") {
    error_500();
}

elseif($test == 'redirect') {
    redirect_to(url_for('salamanders/show.php'));
}

else {
    echo("No Error");
}
?>

<?php require_once('../../private/initialize.php'); 


include(SHARED_PATH . '/salamander-header.php'); 
?>

<h2>Create Salamander</h2>
<form action="<?= url_for('/salamanders/create.php');?>" method="post">
    <label>Name</label><br>
    <input type="text" name="salamander_name" value=""><br>
    <input type="submit" value="edit salamander">
</form>
<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
