<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0
$salamander = find_all_salamanders_by_id($id);




include(SHARED_PATH . '/salamander-header.php'); 

?>


  <a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <h1>Salamander: <?php echo h($salamander['name']);?></h1>
  

   <p> Page ID: <?= h($id); ?> </p>

    <dl>
        <dt>Habitat:</dt><br>
        <dd><?php echo h($salamander['habitat']);?></dd><br>
    </dl>
    <dl>
        <dt>Description:</dt><br>
        <dd><?php echo $salamander['description'];?></dd><br>
    </dl>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
