<?php

//require_once "header.php"; already included in nav.php
include("nav.php");

?>

<div class="container align-items-center" style="min-height: 500px;">

    <?php
    function Damen() {
        include("damen.php");
    }
    function Herren() {

        include("herren.php");
    }
    function Kinder() {
        include("kinder.php");
    }
    function Bestellungen(){
        include("bestellen.php");
    }
    function Bestellbecome(){
        include ("bestelbecome.php");
    }
    function Alle() {
        include("alle.php");
    }
    if(isset($_GET['Alle'])){
        Alle();
    }

    if (isset($_GET['Damen'])) {
        Damen();
    }
    if (isset($_GET['Herren'])) {
        Herren();
    }
    if (isset($_GET['Kinder'])) {
        Kinder();
    }
    if(isset($_GET['Bestellungen'])){
        Bestellungen();
    }
    if(isset($_GET['save'])){
        Bestellbecome();
    }
    if(isset($_GET['edit'])){
        include 'einzelprodukt.php';
    }

    ?>
</div>



<?php include("footer.php"); ?>