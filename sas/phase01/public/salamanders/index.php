<!-- require initialize.php -->
<?php 
    session_start();

    require_once('../../private/initialize.php');

    $salamanders = [1 => "Red-Legged Salamander", 2 => "Pigeon Mountain Salamander", 3 => "ZigZag Salamander", 4 =>"Slimy Salamander"];

    $_SESSION['salamanders'] = $salamanders;
?>

<!-- 
  Write a salamanders array with the following
id=1, salamanderName = Red-Legged Salamander
id=2, salamanderName = Pigeon Mountain Salamander
id=3', salamanderName = ZigZag Salamander
id=4,  salamanderName= Slimy Salamander 
-->



<!-- Add the pageTitle for salamanders
Include a shared path to the salamander header -->
<?php require_once('../../private/shared/salamander-header.php'); ?>

<html>

<h1>Salamanders</h1>

  <a href="#">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $id => $salamander) { ?>
        <tr>
          <!-- <td>Display the salamander id</td> -->
           <td><?php print("".$id."");?></td>
    	    <!-- <td>Display the salamander name</td> -->
             <td><?php print("".$salamander.""); ?></td>
          <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
          <td><a href="show.php?id=<?php print("".$id."")?>">View</a></td>
          <td><a href="#">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
      </html>

<?php ?>
 <!--  add the shared path to the salamander footer  -->
 <?php require_once('../../private/shared/salamander-footer.php'); ?>
