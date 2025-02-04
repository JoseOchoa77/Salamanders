<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/13/25
	File:	  city-survey.php
	Purpose:

-->

<html>
<head>
	<title>CITY SURVEY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$citySurvey = array("London", "Paris", "Rome", "Rome", "Paris",
		"Paris", "Paris", "London", "Rome", "Rome",
		"Paris", "London", "Paris", "London", "London",
		"London", "Paris", "London", "Paris", "Rome");

		// Add the code needed to count the number of times that each city occurs in the array
    $londonCount = 0;
    $parisCount = 0;
    $romeCount = 0;

    for($i=0; $i < sizeof($citySurvey); $i++)
      {
        if($citySurvey[$i] == "London")
          
            $londonCount = $londonCount + 1;
          

          if($citySurvey[$i] == "Paris")
          
            $parisCount = $parisCount + 1;
          

          if($citySurvey[$i] == "Rome")
          
            $romeCount = $romeCount + 1;
          
      }

      print ("<h1>CITY SURVEY RESULTS</h1>");
      // display the results in a table
          print("<table>");
          print("<tr><th>City Name</th><th>Amount</th></tr>");
          print("<tr><td>London</td><td>$londonCount</td></tr>");
          print("<tr><td>Paris</td><td>$parisCount</td></tr>");
          print("<tr><td>Rome</td><td>$romeCount</td></tr>");
		?>
</body>
</html>
