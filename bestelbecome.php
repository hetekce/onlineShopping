<?php

require_once "header.php";
include("nav.php");

?>

    <div class="container" style="min-height: 500px; margin-left: 50px; margin-top: 50px; ">
<a href='index.php?Alle=true'>Alle</a>
<a href='index.php?Damen=true'>Damen</a>
<a href='index.php?Herren=true'>Herren</a>
<a href='index.php?Kinder=true'>Kinder</a>

        <div class="alert alert-success" role="alert">
            Ihre Bestellung wurde bekommen. Danke für Ihren Einkauf.
        </div>
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
  if (isset($_GET['Alle'])) {
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
   function Alle() {
    include("alle.php");
  }
?>


    </div>




<?php include("footer.php");