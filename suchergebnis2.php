<div class='container'>

    <h1 class='font-weight-light text-center text-lg-left mt-4 mb-0'>Dein Produkt</h1>
    <hr class='mt-2 mb-5'>

    <div class='row text-center text-lg-left'>
<?php
include('connection.php');

if (isset($_GET['suchwort'])) {
    $suchworte = $_GET['suchwort'];
    echo $suchworte;
}

$stmt = $pdo->query("SELECT `produkt_ID`,`Produkt_Name`,`subabteilung_ID`,`preis`,`groesse`,`farbe`,`geschlecht`,`bilder_path`,`anzahl` FROM onlineshopping.produkten WHERE `Produkt_Name` LIKE '%".$suchworte."%'");
while ($row = $stmt->fetch()) {
    echo "<div class='col-lg-3 col-md-4 col-6'><a href='#' class='d-block mb-4 h-100'>";

    echo "<img class='img-thumbnail' width='400px'; height='400px'; src='" . $row['bilder_path'] . "' alt=''><br>" . $row['Produkt_Name'] . " </a>  </div>";


}


?>