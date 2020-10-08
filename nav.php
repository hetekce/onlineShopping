<?php

include("header.php");

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:150px; background-color: blue">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-5">
                <a class="navbar-link" href="index.php?Alle=true" style="color: #005cbf;  "><h1>Marselando</h1></a>
            </li>
            <li class="nav-item ml-5 mt-2 mr-3">
                <a class="nav-link" href="index.php?Bestellungen=true"><h5>Bestellungen</h5></a>
            </li>
            <li class="nav-item mt-2 mr-3">
                <a class="nav-link" href='index.php?Damen=true'><h5>Damen</h5></a>
            </li>
            <li class="nav-item mt-2 mr-3">
                <a class="nav-link" href='index.php?Herren=true'><h5>Herren</h5></a>
            </li>
            <li class="nav-item mt-2 mr-3">
                <a class="nav-link" href='index.php?Kinder=true'><h5>Kinder</h5></a>
            </li>


            <li class="nav-item dropdown mt-2 mr-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h5>Bekleidung</h5>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">T-Shirt</a>
                    <a class="dropdown-item" href="#">Hemden</a>
                    <a class="dropdown-item" href="#">Pullover</a>
                    <a class="dropdown-item" href="#">Jeans</a>
                    <a class="dropdown-item" href="#">Sweatshirts</a>
                    <a class="dropdown-item" href="#">Hosen</a>
                    <a class="dropdown-item" href="#">Jacken</a>
                    <a class="dropdown-item" href="#">Mantel</a>

                </div>
            </li>
            <li class="nav-item dropdown mt-2 mr-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h5>Schuhe</h5>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Sneaker</a>
                    <a class="dropdown-item" href="#">Business</a>
                    <a class="dropdown-item" href="#">Sandalen</a>
                    <a class="dropdown-item" href="#">Stiefen</a>
                    <a class="dropdown-item" href="#">Outdoor</a>
                    <a class="dropdown-item" href="#">Sportschuhe</a>


                </div>
            </li>

        </ul>
        <div class="dropdown mr-3">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                BG Farbe
            </button>
            <?php
            function currentUrl() {
            $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
            $host     = $_SERVER['HTTP_HOST'];
            $script   = $_SERVER['SCRIPT_NAME'];
            $params   = $_SERVER['QUERY_STRING'];

            if (preg_match('/\bcolour\b/', $params)) {
                list($p1,$p2) = explode('colour', $params);
                $params = $p1;
            }
            if(strpos($params, '&' )!=false){
                list($part1, $part2) = explode('&', $params);
                $params = $part1;
            }

            return $protocol . '://' . $host . $script . '?' . $params;
            }
            ?>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <!--<a class="dropdown-item" href="<?php //echo $_SERVER['REQUEST_URI'] . '&colour=grey'; ?>">Grey</a>-->
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=pink';?>">Pink</a>
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=pink';?>">Grey</a>
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=white';?>">White</a>
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=blue';?>">Blue</a>
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=purple';?>">Purple</a>
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=green';?>">Green</a>
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=yellow';?>">Yellow</a>
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=orange';?>">Orange</a>
                <a class="dropdown-item" href="<?php echo currentUrl().'&colour=red';?>">Red</a>
                <!--<a class="dropdown-item" href="?colour=white">White</a>
                <a class="dropdown-item" href="?colour=blue">Blue</a>
                <a class="dropdown-item" href="?colour=purple">Purple</a>
                <a class="dropdown-item" href="?colour=green">Green</a>
                <a class="dropdown-item" href="?colour=yellow">Yellow</a>
                <a class="dropdown-item" href="?colour=orange">Orange</a>
                <a class="dropdown-item" href="?colour=red">Red</a>-->
            </div>
        </div>
        <form action="suchergebnis2.php" method="get" class="form-inline my-2 my-lg-0">
            <input name="suchwort" class="form-control mr-sm-2" type="search" placeholder="Wonach suchen Sie" aria-label="Search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
        </form>
    </div>
</nav>
