<!DOCTYPE html>
<!--	Author:
		Date:
		File:	bus-travel.php
		Purpose: Chapter 8 Exercise

-->

<html>
<head>
	<title>BUSINESS TRAVEL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		$tripDate = $_POST['tripDate'];
		$miles = $_POST['miles'];		
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];		
		$hotel = $_POST['hotel'];

		// Add your code here to calculate the allowances and the total reimbursement
		// Look at the print statements below to determine what variables names to use
		// for each item so that these will display correctly

		
		
		
				
			
		print ("<h1>BUSINESS TRAVEL REIMBURSEMENT FORM</h1>");
		print ("<table><tr><td>CAR USE:</td><td>$$carUse</td</tr>
			<tr><td>BREAKFAST ALLOWANCE:</td><td>$$breakfastAllowance</td</tr>
			<tr><td>LUNCH ALLOWANCE:</td><td>$$lunchAllowance</td</tr>
			<tr><td>DINNER ALLOWANCE:</td><td>$$dinnerAllowance</td</tr>
			<tr><td>HOTEL ALLOWANCE:</td><td>$$hotelAllowance</td</tr>
			<tr><td><strong>TOTAL REIMBURSEMENT:</strong></td><td><strong>$$total</strong></td</tr></table>");
	?>

</body>
</html>
