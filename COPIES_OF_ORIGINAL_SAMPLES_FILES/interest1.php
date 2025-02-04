<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	interest1.php
		Purpose:HTML Practice
-->


<html>
<head>
	<title> Compound Interest</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1> Compound Interest</h1>
	<?php
		$annualInterest = $_POST['annualInterest'];	
		$initialInvestment = $_POST['initialInvestment'];
		$investmentPeriod = $_POST['investmentPeriod'];
		$monthlyAddition = $_POST['monthlyAddition'];
			
		
		$monthlyInterest = $annualInterest / 12;
		$month = 1;
		$currentInvestment = $initialInvestment;

		while ($month <= $investmentPeriod)
		{
			$currentInvestment =  $currentInvestment +
				($currentInvestment * $monthlyInterest) +
				 $monthlyAddition;

			$month = $month + 1;
		}

		print ("<p>INITIAL INVESTMENT: $$initialInvestment<br>");
		print ("<p>MONTHLY ADDITION: $$monthlyAddition <br>");
		print("ANNUAL INTEREST RATE: $annualInterest<br>");
		print("INVESTMENT PERIOD: $investmentPeriod months.</p>");

		print("<p>FINAL INVESTMENT: $".number_format($currentInvestment, 2)." </p>");

	?>
</body>
</html>
