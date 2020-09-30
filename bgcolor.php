<?php
# session_start();

if(isset($_GET['colour'])) {
    $colour = $_GET['colour'];
    $_SESSION['colour'] = $colour;
}
$colour_session = $_SESSION['colour'];

?>

