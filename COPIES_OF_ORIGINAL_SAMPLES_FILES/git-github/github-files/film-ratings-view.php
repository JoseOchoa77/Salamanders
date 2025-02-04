<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	22/12/2020
		File:	film-ratings-view.php
		Purpose:Purpose:WBIP file-rating exercise using git

-->

<html>
<head>
	<title>Film Ratings - View</title>
	<link rel ="stylesheet" type="text/css" href="film-ratings.css">
</head>
<body>

	<h1>Film Ratings - View Ratings</h1>

	<?php  // get the list of films
		
    $reviewFile =fopen("film-ratings-list.txt","r");			// open the quotes file
    
    $nextReport = trim(fgets($reviewFile));				// get first film and store in array

    $numReviews = 0;
    
	while (!feof($reviewFile)) {
        list($filmTitle, $rating) = explode(",", $nextReport);
        
        if (isset($testArray[$filmTitle])) {            // title has alread been found so accumulate current value and count
            $testArray[$filmTitle] +=$rating;
            $countArray[$filmTitle]++;
        }
        else {                                          // first time this film was found..
            $testArray[$filmTitle] = $rating; 
            $countArray[$filmTitle] = 1;
        }
		$nextReport = trim(fgets($reviewFile));			// keep adding films to array
    }
	fclose($reviewFile);								// close the file

	print("<table>");
	print("<tr><td>Film Title</td><td>Avg Rating</td><td></td></tr>");
	foreach ($testArray as $filmTitle => $rating) {
	
        $numStars = ceil($rating / $countArray[$filmTitle]); 
    
        print("<tr><td>".$filmTitle."</td><td align=\"center\">");
        for ($i = 1; $i <= $numStars; $i++)
            print("*");
        print("</td><td>(".$countArray[$filmTitle]." Ratings)</td></tr>");
	}
	print("</table>");
    ?>
    <p><a href = "film-ratings.html">Return to Film Ratings Form</a></p>
</body>
</html>
