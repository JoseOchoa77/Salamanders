<?php 
function removePunctuation($string) {
    $string =  strtolower($string);
    $string = preg_replace('/[^a-z]+/i', '', $string);
    return $string;
}
?>
