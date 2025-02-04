<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	22/12/2020
		File:	film-ratings-submit.php
		Purpose:Provide a form to aubmit a new film rating
                Purpose:WBIP file-rating exercise using git
-->

<html>
<head>
	<title>Film Rating - Submit</title>
	<link rel ="stylesheet" type="text/css" href="film-ratings.css">
</head>
<body>

	<h1>Film Ratings - Submit a New Rating</h1>

	<?php  // get the list of films
		
    $filmFile =fopen("film-list.txt","r");			// open the quotes file
    
    $films[] = trim(fgets($filmFile));				    // get first film and store in array

	while (!feof($filmFile)) {
		$films[] = trim(fgets($filmFile));			// keep adding films to array
    }
	fclose($filmFile);								// close the file
	?>
	<form action = "film-ratings-add.php" method = "post">

		<label for = "filmTitle">Which film do you want to rate?
		<select name = "title" id = "filmTitle">
    <?php
        for ($i = 0; $i < sizeof($films); $i++) { 
            print ("<option>".$films[$i]."</option>"); //
        }
    ?>
		</select></label>
		
  		<label for = "filmRating">What is your rating for this film?
		<select name = "rating" id = "filmRating">
		<option>*</option>
		<option>**</option>
		<option>***</option>
		<option>****</option>
		<option>*****</option>
		</select></label>
		<input class = "submit" type = "submit" value = "Submit your rating..">
	</form>
	
	<p><a href = "film-ratings.html">Return to Film Ratings Form</a></p>
</body>
</html>
