<?php

require_once('../../private/initialize.php');
require_once('../../private/functions.php');

if(is_post_request()) {
    // Handle form values sent by new.php

    $salamander_name = $_POST['salamander_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form parameters<br>";
    echo "Salamander name: ". $salamander_name ."<br>";
    echo "Position: ".$position." <br>";
    echo "Visible: ".$visible."<br>";
}

else {
    redirect_to(url_for('salamanders/edit.php'));
}
?>
