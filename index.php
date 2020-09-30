<?php

require_once "header.php";
include("nav.php");

?>

    <div class="container" style="min-height: 500px; margin-left: 50px; margin-top: 50px;">

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

        if (isset($_GET['Damen'])) {
            Damen();
        }
        if (isset($_GET['Herren'])) {
            Herren();
        }
        if (isset($_GET['Kinder'])) {
            Kinder();
        }
        function Alle() {
            include("alle.php");
        }
        ?>
    </div>


<?php include("footer.php");