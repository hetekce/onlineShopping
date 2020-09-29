<?php include("header.php"); ?>


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:150px; background-color: blue">
    <a class="navbar-brand" href="#" style="color: #005cbf"><h1>Marselando</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><h3>Home</h3><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><h3>Angebot</h3></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h3>Damen</h3>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Bekleidung</a>
                    <a class="dropdown-item" href="#">Schuhe</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h3>Herren</h3>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Bekleidung</a>
                    <a class="dropdown-item" href="#">Schuhe</a>

                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Wonach suchen Sie" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
        </form>
    </div>
</nav>
</nav>
