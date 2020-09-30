<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();

}

if(isset($_GET['colour'])) {
    $colour = $_GET['colour'];
    $_SESSION['colour'] = $colour;
    //$colour_session = $_SESSION['colour'];
}

?>

echo "<body style='background-color:pink'>";

