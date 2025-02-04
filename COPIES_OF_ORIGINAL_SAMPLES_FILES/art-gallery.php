<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	art-gallery.php
		Purpose:PHP Practice
-->
<html>
<head>
	<title> Welcome to the Art Gallery!</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Welcome to the Art Gallery!</h1>
	<?php
		$artist = $_POST['artist'];
		
		if ($artist == "Paul Cezanne")
		{
 			print("<p><strong>PAUL CEZANNE, 1839 - 1906</strong></p>");
 			print("<p><img src = \"cezanne1.jpg\" border = \"5\"></p>");
 			print("<p><strong>Title:</strong> House and Farm at Jas de Bouffan<br>");
 			print("<p><strong>Date:</strong> 1889-90<br>");
 			print("<p><strong>Medium:</strong> Oil on Canvas</p>");
		}
		else if ($artist == "Claude Monet")
		{
 			print("<p><strong>CLAUDE MONET, 1840 - 1875</strong></p>");
 			print("<p><img src = \"monet1.jpg\" border = \"5\"></p>");
 			print("<p><strong>Title:</strong> Woman with a Parasol<br>");
 			print("<strong>Date:</strong>1875<br>");
 			print("<strong>Medium:</strong> Oil on Canvas</p>");
		}
		else if ($artist == "Henri Matisse")
		{
 			print("<p><strong>HENRI MATISSE, 1869 - 1954</strong></p>");
 			print("<p><img src = \"matisse1.jpg\" border = \"5\"></p>");
 			print("<p><strong>Title:</strong> The Red Madras Headress<br>");
 			print("<strong>Date:</strong> 1907<br>");
 			print("<strong>Medium:</strong> Oil on Canvas</p>");
		}
		else if ($artist == "Paul Gauguin")
		{
 			print("<p><strong>PAUL GAUGUIN, 1848 - 1903</strong></p>");
 			print("<p><img src = \"gauguin1.jpg\" border = \"5\"></p>");
 			print("<p><strong>Title:</strong> The Swineherd<br>");
 			print("<strong>Date:</strong> 1888<br>");
 			print("<strong>Medium:</strong> Oil on Canvas</p>");
		}

		print (" <p><a href = \"art-gallery.html\">Choose another artist</a></p>");
	?>

</body>
</html>
