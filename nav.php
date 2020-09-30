<?php

include("header.php");

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:150px; background-color: blue">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="navbar-link" href="#" style="color: #005cbf;  "><h1>Marselando</h1></a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="#"><h3>Angebot</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><h3>Damen</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><h3>Herren</h3></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h3>Bekleidung</h3>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h3>Schuhe</h3>
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
        <form action="suchergebnis2.php" method="get" class="form-inline my-2 my-lg-0">
            <input name="suchwort" class="form-control mr-sm-2" type="search" placeholder="Wonach suchen Sie" aria-label="Search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
        </form>
    </div>
</nav>
