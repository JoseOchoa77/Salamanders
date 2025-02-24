<?php require_once('../../private/initialize.php');
include_once("../../private/functions.php");

// fancy if...else


// if the id is not empty assign it the value from $_GET['id']
// else $id = 1
// or use the non-coalesing operator



$pageTitle = 'Salamander Details';

// include the shared path to the header
require_once('../../private/shared/salamander-header.php');

?>
<html>
    <h2>Salamander Details</h2>
    <!-- <p> Page ID: Use the h() function and pass in the id/p> -->
        <p>Page ID:<?php print(" ".$_GET['id'].""); ?><p>
    <p><a href="http://localhost:8888/web182/sas/phase01/public/salamanders">&laquo; Back to Salamander List</a></p>
</html>



<!-- Use the shared path to the salamander footer. -->
<?php require_once('../../private/shared/salamander-footer.php'); ?>
