<?php require_once('../../private/functions.php');

$test = $_GET['test'] ?? '';

if($test == "404") {
    error_404();
}

elseif($test == "500") {
    error_500();
}

elseif($test == 'redirect') {
    redirect_to(url_for('salamanders/show.php'));
}

else {
    echo("No Error");
}
?>
