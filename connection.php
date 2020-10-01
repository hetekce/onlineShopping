<?php
include ("config.php");


try {


    $pdo = new  PDO($dsn,$username,$password);




    //  echo "Connected successfully";

    // while ($row = $stmt->fetch()) {
    //echo $row['Benutzer_ID']."<br />\n";

}

catch (PDOException $e){
    echo $e->getMessage();
}

// initialize variables
$produkt_id = 0;
$stuecke = 0;
$farbe = "";
$preis = 0;
$user = 1;
$name = "";
$bes_group_id = "";
$m ="";

if (isset($_POST['save'])) {
    if(!empty($_POST['stuecke'])) {
        $stuecke = $_POST['stuecke'];
    }
    $produkt_id = $_POST['id'];
    $stuecke = $_POST['stuecke'];
    $preis = $_POST['preis']*$stuecke;
    $farbe = $_POST['farbe'];
    $name = $_POST['name'];
    $sql1 = "INSERT INTO bestellungen (benutzer_ID, bestellpreis) VALUES (?,?)";
    $pdo->prepare($sql1)->execute([$user, $preis]);
    $last_id = $pdo->LastInsertId();
    $sql = "INSERT INTO transaktionen (produkt_ID, bestellung_group_ID, stuecke, transaction_preis) VALUES (?,?,?,?)";
    $pdo->prepare($sql)->execute([$produkt_id, $last_id, $stuecke, $preis]);

    //$_SESSION['save'] = "Neue Benutzer wurde hinzugefügt";
    header('location: index.php?save');
}

if (isset($_POST['update'])) {
    $produkt_id = $_POST['id'];
    $name = $_POST['name'];
    $stuecke = $_POST['stuecke'];
    $farbe = $_POST['farbe'];
    $preis = $_POST['preis'];
    $sql2 = "INSERT INTO warenkorb (produkt_ID, bestellpreis, stuecke) VALUES (?,?,?)";
    $pdo->prepare($sql2)->execute([$produkt_id, $preis, $stuecke]);
    header('location: index.php');
}


if (isset($_POST['delete'])) {
    $itemID = $_POST['checkbox'];
    foreach ($itemID as $id) {
        $stmt3 = $pdo->prepare("Delete from transaktionen where bestellung_group_id=" . $id);
        $stmt3->execute();
        $stmt2 = $pdo->prepare("DELETE FROM bestellungen WHERE bestellung_ID=" . $id);
        $stmt2->execute();
    }
//$_SESSION['message'] = "Ausgewählte Benutzer wurde entfernt!";
    header("location: index.php?Bestellungen");
}


?>