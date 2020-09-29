<?php
session_start();

if(isset($_GET['colour'])) {
    $colour = $_GET['colour'];
    $_SESSION['colour'] = $colour;
}

$colour_session = $_SESSION['colour'];
echo "bgcolour = $colour_session";

?>

<html>
<head>

</head>
<body bgcolor='<?php echo $colour_session; ?>'>

<div class="conatiner-fluid">
    <div class="col-md-12">
        <div class="col-md-4 col-md-offset-4 text-center bgColour">
            <p>Choose Background Colour:</p>
            <a href="?colour=grey"><img src="images/grey.jpg" alt="grey"></a>
            <a href="?colour=white"><img src="images/white.jpg" alt="white"></a>
            <a href="?colour=pink"><img src="images/pink.jpg" alt="pink"></a>
            <a href="?colour=blue"><img src="images/blue.jpg" alt="blue"></a>
            <a href="?colour=purple"><img src="images/purple.jpg" alt="purple""></a>
            <a href="?colour=green"><img src="images/green.jpg" alt="green"></a>
            <a href="?colour=yellow"><img src="images/yellow.jpg" alt="yellow"></a>
            <a href="?colour=orange"><img src="images/orange.jpg" alt="orange"></a>
            <a href="?colour=red"><img src="images/red.jpg" alt="red"></a>
        </div>
    </div>
</div>


</body>
</html>
