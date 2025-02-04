<!DOCTYPE html>
<!--Author: 01/10/25
	File:	modify5.php
	Purpose:Chapter 11 Exercise

	modify5.php calculates the total income from each of your Web programming contracts. The income amounts are first assigned to an array named $income and the total is $32,800.00. The program would be MUCH more useful if the income amounts were read from a file into the array. That way you can add numbers to the file as you complete new contracts, and the program will still work without changes. 
	
	Your chapter folder includes a file named contracts.txt that contains the amounts received from each contract (one number to each line). Change modify5.php so that it reads the values from the contracts.txt file into the array instead of assigning the values directly. Use a WHILE NOT EOF loop so that your solution will work no matter how many numbers are stored in the contracts.txt file. The total should now be $34,600.00.
	
	 Note that the code to calculate the total of the values in the array does not need to be changed. 

-->

<html>
<head>
	<title>Modify 5</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>INCOME FROM WEB CONTRACTS</h1>

	<?php
	
		// replace the following line with the code required to read the numbers into the array from a file named contracts.txt. Your solution should use a WHILE NOT EOF loop
		
		$incomeFile = fopen("contracts.txt", "r");
    $income = trim(fgets($incomeFile));
    while (!feof($incomeFile))
      {
        $incomes[] = $income;
        $income = trim(fgets($incomeFile));
      }
		// The following code does not need to be changed
		$total = 0;
		for ($i = 0; $i < sizeof($incomes); $i=$i+1)
		{
			$total = $total + $incomes[$i];
		}

		print("<p>Total income is $". number_format($total,2)."</p>");
	?>
</body>
</html>
