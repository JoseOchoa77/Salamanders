<!DOCTYPE html>
<!--	Author: Jose Ochoa
		Date:	01/28/25
		File:	new-employee.php
		Purpose: OOP Example
-->

<html>
<head>
	<title>OOP Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
<?php

	include("inc-employee-object.php");

	$id = $_POST["id"];
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$title = $_POST["jobTitle"];
	$hourlyWage = $_POST["wage"];

  //create a new employee object, instantiate
	$emp = new Employee();
	$emp->setID($id);
	$emp->setFirstName($firstName);
	$emp->setLastName($lastName);
	$emp->setJobTitle($title);
	$emp->setHourlyWage($hourlyWage);
	$emp->addEmployee();

	print("The new employee ($id) has been added to the employee file.");
?>
</body>
</html>
