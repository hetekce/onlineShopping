<div class='container'>
    <h1 class='font-weight-light text-center text-lg-left mt-4 mb-0'>Damen</h1>
    <hr class='mt-2 mb-5'>

    <div class='row text-center text-lg-left'>
        <?php
        include ('connection.php');
        $stmt = $pdo->query("SELECT `Produkt_ID`, `Produkt_Name`,`bilder_path` FROM `produkten` WHERE `geschlecht` = 'Damen'");
        while ($row = $stmt->fetch()) {
            echo     "<div class='col-lg-3 col-md-4 col-6'><a href='einzelprodukt.php?edit=".$row['Produkt_ID']."' class='d-block mb-4 h-100'>";

            echo      "<img class='img-fluid img-thumbnail' src='".$row['bilder_path']."' alt=''>" .$row['Produkt_Name']." </a>  </div>";

        }


        ?>
