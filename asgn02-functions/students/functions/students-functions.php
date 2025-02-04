<?php

function addBonusPoints($score){
  foreach($score as &$students)
  {
    $students["score"] = $students["score"] +  3;
  }
  return $score;
}

function addBonusPointsByReference(&$score) {
  foreach($score as &$students)
  {
    $students["score"] = $students["score"] +  3;
  }
}
