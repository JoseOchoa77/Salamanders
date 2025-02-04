<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	22/12/2020
		File:	film-add.php
		Purpose:add a new film to the films file
		Ref:    Purpose:WBIP file-rating exercise using git
-->

<html>
<head>
	<title>Film - Add</title>
	<link rel ="stylesheet" type="text/css" href="film-ratings.css">
</head>
<body>

	<h1>Film Ratings - Add a New Film</h1>

	<?php  
		
    $newFilm = $_POST['newFilm'];
        
    // get the list of films
		
    $duplicateFilm = false;
    $filmFile =fopen("film-list.txt","r");			// open the quotes file
    
    $nextFilm = trim(fgets($filmFile));				    // get first film and store in array

	while (!feof($filmFile) && !$duplicateFilm) {
        if ($nextFilm == $newFilm)
            $duplicateFilm = true;
		$nextFilm = trim(fgets($filmFile));			// keep adding films to array
    }
	fclose($filmFile);								// close the file
	
	
    if ($duplicateFilm) {
        print("<p>Oops! ".$newFilm." has already been added to the list!</p>");
    }
    else {
        $filmFile =fopen("film-list.txt","a");	// open the file
    
        fputs($filmFile, $newFilm."\n");	// append the film title and number of stars, separate by a comma

        fclose($filmFile);								// close the file
        print("<p>Thank you, ".$newFilm." has been added to the list of films and can now be rated.</p>");
    }
	?>
</body>
</html>
