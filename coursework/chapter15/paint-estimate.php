<!DOCTYPE html>
<!--	Author: Jose Ochoa
		Date:	02/03/25
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php
  include("inc-rectangle-object.php");
  $height = $_POST['height'];
  $length = $_POST['length'];
  $width = $_POST['width'];

  $longWall = new Rectangle();
  $shortWall = new Rectangle();

  $longWall->setX($height);
  $longWall->setY($width);
  $shortWall->setX($height);
  $shortWall->setY($length);

  
 

  $totalArea = (2 * $longWall->getArea()) + (2 * $shortWall->getArea());

	// your code here
	
	
	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>
