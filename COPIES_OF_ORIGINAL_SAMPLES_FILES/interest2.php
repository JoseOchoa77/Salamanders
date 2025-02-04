<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	interest2.php
		Purpose:HTML Practice
-->


<html>
<head>
	<title> Compound Interest</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1> Compound Interest</h1>

	<table>
	<tr><td><strong>Month</strong></td><td><strong>Interest</strong></td>
		<td><strong>Deposit</strong></td><td><strong>Balance</strong></td></tr>

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
			$currentInterest = $currentInvestment * $monthlyInterest;
			$currentInvestment =  $currentInvestment +
				$currentInterest + $monthlyAddition;

			print("<tr><td>$month</td><td>$".number_format($currentInterest, 2)."</td>
				<td>$$monthlyAddition</td><td>$".
						number_format($currentInvestment, 2)."</td></tr>");

			$month = $month + 1;
		}

	?>
	</table>
</body>
</html>
