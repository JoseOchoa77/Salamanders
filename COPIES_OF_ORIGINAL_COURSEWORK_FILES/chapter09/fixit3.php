<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit3.php
	Purpose:  This program is supposed to show a list of mileage
			  reimbursements for miles traveled between 50 and 500,
			  in increments of 25 miles. But it only shows the
			  reimbursement for 525 miles!
			  Can you fix it? What is missing here? Hint the program
			  is processing the last line (containing the print statement)
			  AFTER the loop has completed executing, instead of
			  processing this line EACH time the loop repeats.
-->

<html>
<head>
	<title>MILEAGE REIMBURSEMENT TABLE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>MILEAGE REIMBURSEMENT TABLE</h1>

	<?php

		for ($miles = 50; $miles <= 500; $miles = $miles + 25)

			$reimbursement = $miles * 0.35;
			print ("Your reimbursement for $miles miles will be $$reimbursement<br />");

	?>
</body>
</html>
