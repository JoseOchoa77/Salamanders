<!DOCTYPE html>
<!--	Author: Jose Ochoa
		Date: 01/13/25
		File:	seating.php
		Purpose: Chapter 11 Exercise
-->

<html>
<head>
	<title>SEATING MAINTENANCE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		print ("<h1>SEATING MAINTENANCE REPORT</h1>");

		$seating = array (
			"OK", "OK", "OK", "OK", "REPAIR", "OK", "OK", "OK", "OK", "OK",
			"OK", "OK", "OK", "REPAIR", "OK", "REPAIR", "OK", "OK", "OK", "OK",
			"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK",
			"OK", "OK", "REPAIR", "REPAIR", "REPAIR", "OK", "OK", "OK", "OK", "OK",
			"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK",
			"OK", "OK", "OK", "REPAIR", "OK", "OK", "OK", "OK", "OK", "OK",
			"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK",
			"OK", "OK", "REPAIR", "OK", "OK", "OK", "OK", "OK", "OK", "OK",
			"OK", "OK", "OK", "OK", "OK", "OK", "REPAIR", "OK", "OK", "OK",
			"OK", "OK", "OK", "OK", "OK", "OK", "OK", "REPAIR", "OK", "OK");

		$count = 0;
    $repairSeatNumber = 0;

		// Add your FOR loop here to process the array and print the numbers of all seats that need repair,
		// for example:
		//	SEAT #5 NEEDS REPAIR
		//	SEAT #14 NEEDS REPAIR and so on..
		// The loop must also count the number of seats in need of repair

    for($i=0; $i < sizeof($seating); $i++)
      {
        if($seating[$i] == "REPAIR")
        {
          $i = $i +1;
          print("Seat $i needs to be repaired<br>");
          $count = $count + 1;
          $i = $i - 1;
        }
      }
		print ("<p>$count seats are in need of repair</p>");
?>
</body>
</html>
