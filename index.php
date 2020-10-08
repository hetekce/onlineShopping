<?php

//require_once "header.php"; already included in nav.php
include("nav.php");

?>

<div class="container align-items-center" style="min-height: 500px;">

    <?php

    if(isset($_GET['Alle'])){
        include("alle.php");
    }

    if (isset($_GET['Damen'])) {
        include("damen.php");
    }
    if (isset($_GET['Herren'])) {
        include("herren.php");
    }
    if (isset($_GET['Kinder'])) {
        include("kinder.php");
    }
    if(isset($_GET['Bestellungen'])){
        include("bestellen.php");
    }
    if(isset($_GET['save'])){
        include ("bestelbecome.php");
    }
    if(isset($_GET['edit'])){
        include ("einzelprodukt.php");
    }

    ?>
</div>



<?php include("footer.php"); ?>