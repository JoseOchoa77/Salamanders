<?php
class GameCharacter 
{
  private $playerName;
  private $playerScore;


  public function setPlayerName($playerName) {
    $this->playerName = $playerName;
  }

  public function getPlayerName() {
    return $this->playerName;
  }

  public function setPlayerScore($playerScore) {
    $this->playerScore = $playerScore;
  }

  public function getPlayerScore() {
    return $this->playerScore;
  }

  }

  function betterPlayerScore($playerOneScore, $playerTwoScore){
    if($playerOneScore > $playerTwoScore)
    return $playerOneScore;
    else
    return $playerTwoScore;
  }

