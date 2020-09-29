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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <style type="text/css">
        body { background-color: <?php echo $colour_session; ?> !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>
    <title>Marsalando</title>
</head>

<body>


<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="?colour=grey">Grey</a>
        <a class="dropdown-item" href="?colour=white">White</a>
        <a class="dropdown-item" href="?colour=pink">Pink</a>
        <a class="dropdown-item" href="?colour=blue">Blue</a>
        <a class="dropdown-item" href="?colour=purple">Purple</a>
        <a class="dropdown-item" href="?colour=green">Green</a>
        <a class="dropdown-item" href="?colour=yellow">Yellow</a>
        <a class="dropdown-item" href="?colour=orange">Orange</a>
        <a class="dropdown-item" href="?colour=red">Red</a>
    </div>
</div>


</body>
</html>