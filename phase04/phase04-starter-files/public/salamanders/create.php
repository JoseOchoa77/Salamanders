<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php'); 

echo "<h1>Stub for Create Salamander</h1>";
?>


<form action="salamanders/" method="post">
    <label>Salamander name:</label><br>
        <input type="text" name="name"><br>
    <label>Habitat:</label><br>
        <input type="text" size="30" name="habitat"><br>
    <label>Description:</label><br>
        <input type="text" size="30" name="description"><br>

    <input type="submit" value="submit salamander">
</form>

<?php
include(SHARED_PATH . '/salamander-footer.php'); 
?>
