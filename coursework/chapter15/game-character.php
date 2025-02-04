<!DOCTYPE html>

<html>
<head>
	<title>Game Character</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
<?php
	include("inc-game-character-object.php");

  $playerOneName = $_POST['playerOneName'];
  $playerOneScore = $_POST['playerOneScore'];
  $playerTwoName = $_POST['playerTwoName'];
  $playerTwoScore = $_POST['playerTwoScore'];
 
	$playerOne = new GameCharacter();
  $playerTwo = new GameCharacter();

	$playerOne->setPlayerName($playerOneName);
  $playerTwo->setPlayerName($playerTwoName);
  $playerOne->setPlayerScore($playerOneScore);
  $playerTwo->setPlayerScore($playerTwoScore);

  $betterPlayerScore = betterPlayerScore($playerOneScore, $playerTwoScore);

  $getPlayerOneScore = $playerOne->getPlayerScore();
  $getPlayerTwoScore = $playerTwo->getPlayerScore();
  $getPlayerOneName = $playerOne->getPlayerName();
  $getPlayerTwoName = $playerTwo->getPlayerName();

  if ($betterPlayerScore == $getPlayerOneScore)
    $betterPlayer = $getPlayerOneName;
  else 
    $betterPlayer = $getPlayerTwoName;


	print ("<p>$getPlayerOneName has  $getPlayerOneScore points and $getPlayerTwoName has $getPlayerTwoScore points. $betterPlayer is the better player with $betterPlayerScore points.</p>");
?>
</body>
</html>
