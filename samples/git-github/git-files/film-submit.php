<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	22/12/2020
		File:	film-submit.php
		Purpose:Provide a form to aubmit a new film 
                Purpose:WBIP file-rating exercise using git
-->

<html>
<head>
	<title>Film Rating - Submit</title>
	<link rel ="stylesheet" type="text/css" href="film-ratings.css">
</head>
<body>

	<h1>Film Ratings - Submit a New Film</h1>

	<form action = "film-add.php" method = "post">

		<label for = "filmTitle">Which film do you  want to add?
		<input type = "text" name = "newFilm" id = "filmTitle"></a></label>
		
		<input class = "submit" type = "submit" value = "Submit your new film..">

	</form>
</body>
</html>
